<?php


class adminIndex extends controller
{
    public function indexAction()
    {
        $memberModel = $this->loadModel('memberModel');
        $this->loadView('/admin/index/adminindex', array('title' => 'پنل مدیریت | شروع سریع',
            'countMember' => $memberModel->countMember()));
    }
}