<?php


class account extends controller
{
    public function indexAction()
    {
        $this->loadView('/user/account/index_account', array('title' => 'مشخصات کاربری'));
    }

}