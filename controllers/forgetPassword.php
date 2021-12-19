<?php


class forgetPassword extends controller
{
    public function indexAction()
    {
        $this->loadView('/user/forgetPassword/forgetPasswordIndex', array('title' => 'فراموشی رمز عبور'));
    }

}