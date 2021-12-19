<?php


class adminListMember extends controller
{

    public function indexAction()
    {


//        $member_model = $this->loadModel('memberModel');
//        if (isset($_POST['']))
        $member_model = $this->loadModel('memberModel');

        // -----------------------------------------------------------  View

        $this->loadView('/admin/listMember/listMemberIndexV', array('title' => 'لیست کاربران وبسایت' , 'member_model' => $member_model));


    }

}