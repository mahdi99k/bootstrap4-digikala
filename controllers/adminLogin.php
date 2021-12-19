<?php


class adminLogin extends controller
{
    public function indexAction()
    {
        $message_error_loginAdmin = null;

        if (isset($_POST['btnLoginAdmin']) || empty($_POST['btnLoginAdmin'])) {

            $email = $_POST['emailLoginAdmin'];
            $password = hashPassword($_POST['passwordLoginAdmin']);   // security plus +     n1n2n3n4n5@
            $check_login = $this->loadModel('adminLoginModel')->login_admin($email, $password); // name model

            if ($check_login) {    // اگر مدیر مشخصات ورود درست زده باشد
                $_SESSION['welcome_to_admin_index'] = $email;  // ایجاد سشن برای ورود ادمین
                header('location:adminIndex');  // ورود به پنل مدیذیت

            } else {     // اگر مدیر مشخصات ورود درست زده باشد
                $message_error_loginAdmin = "ایمیل یا پسوورد اشتباه می باشد";
            }

            //-----------------------------------------------------------------  View

            $this->loadView('/admin/login/loginindex', array('title' => 'ورود به سایت', 'message_error_loginAdmin' => $message_error_loginAdmin));
        }
    }
}