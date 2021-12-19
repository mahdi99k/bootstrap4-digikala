<?php


class register extends controller
{


    public function indexAction()
    {

        $messageErrRegister = null;
        $messageSucRegister = null;
        $member_model = $this->loadModel('memberModel');  // مادل کاربران
        if (isset($_POST['submitRegister'])) {  // اگر روی دکمه کلیک شد
            if (!empty($_POST['usernameRegister']) && !empty($_POST['emailRegister']) && !empty($_POST['passwordRegister'])
                && !empty($_POST['infoRegister']) && !empty($_POST['againPasswordRegister'])) {  // not empty inputs

                if ($member_model->checkEmail($_POST['emailRegister'])) {  // این ایمیل قبلا کسی وارد کرده
                    $messageErrRegister = "کاربری با این ایمیل در وبسایت ثبت نام کرده است";
                } else {                                            //  گرفتن یوزرنیم و ایمیل و سوورد

                    if ($_POST['passwordRegister'] == $_POST['againPasswordRegister']) {
                        if ($_POST['captchaCode'] == $_SESSION['random_number']) {  /* Captcha   اولی اسم اینپوت   دومی سشن یا عددی رندوم که درون کپچا */


                            $infoRegister = trim_url(security($_POST['infoRegister']));
                            $usernameRegister = trim_url(security($_POST['usernameRegister']));
                            $emailRegister = trim_url(security($_POST['emailRegister']));
                            $passwordRegister = trim(hashPassword($_POST['passwordRegister']));  // hash

                            // کاربر در دیبابیس ثبت نام کرده
                            if ($member_model->register($infoRegister, $usernameRegister, $emailRegister, $passwordRegister)) {
                                $messageSucRegister = "ثبت نام شما با موفقیت انجام شد";

                            } else {
                                $messageErrRegister = "ثبت نام شما با مشکل مواجه شده است لطفا مجددا اقدام نمایید";
                            }

                        } else {
                            $messageErrRegister = "کد امنیتی به درستی وارد نشده است";   /*  Captcha  */
                        }

                    } else {
                        $messageErrRegister = "رمز عبور با تکرار رمز عبور یکسان نمی باشد";
                    }

                }
            } else {
                $messageErrRegister = "لطفا اطلاعات خواسته شده را کامل وارد نمایید !";
            }
        }

        // -----------------------------------------------------------  View

        $this->loadView('/user/register/indexR', array('title' => 'ثبت نام در سایت',
            'messageError' => $messageErrRegister, 'messageSuccess' => $messageSucRegister));


    }

}



//      $this->loadView('/admin/listMember/listMemberIndexV', array('title' => 'لیست کاربران وبسایت'));
