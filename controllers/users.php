<?php


class users extends controller
{

    public function indexAction()
    {
        $this->loadView('/user/users/index_users', array('title' => 'ثبت نام | ورود'));
    }

}