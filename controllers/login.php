<?php


class login extends controller
{
    public function indexAction()
    {


        $messageLoginErrSite = null;
        $memberModel = $this->loadModel('memberModel');

        if (isset($_POST['btn_login_User'])) {
            if (!empty($_POST['email_login_User']) && !empty($_POST['password_login_User'])) {
                $emailLoginUser = trim_url(security($_POST['email_login_User']));             // security
                $passwordLoginUser = trim_url(hashPassword($_POST['password_login_User']));  //hash

                if ($memberModel->loginToSite($emailLoginUser, $passwordLoginUser)) {  //خزوجی ترو یا درست =  مشخصات به درستی وارد شده است
                    if ($memberModel->checkBanMember($emailLoginUser)->status == 0) {  // کاربر عادی بلاک نیست
                        $_SESSION['emailMember'] = $emailLoginUser;  // سشن برای ورود
                        header('location:' .AddressMyWebsite);


                    } else {
                        $messageLoginErrSite = "دسترسی شما به سایت تا مدت نا مشخصی محدود شده است و امکان ورود به سایت ندارید";
                    }
                } else {
                    $messageLoginErrSite = 'ایمیل یا پسوورد مورد نظر شما اشتباه می باشد';
                }


            }
        }


        $this->loadView('/user/login/indexL', array('title' => 'ورود به سایت', 'messageLoginErrSite' => $messageLoginErrSite));
    }
}