<?php


class update extends controller
{

    public function editMember($id)
    {

        $memberModel = $this->loadModel('memberModel');

        if (isset($_POST['btnUpdateMember'])) {
            $infoUpdateRegister = trim_url(security($_POST['infoUpdateRegister']));
            $emailUpdateRegister = trim_url(security($_POST['emailUpdateRegister']));
            $usernameUpdateRegister = trim_url(security($_POST['usernameUpdateRegister']));
            $banMember = trim_url(security($_POST['banMember']));

            if ($memberModel->updateMember($infoUpdateRegister, $usernameUpdateRegister, $emailUpdateRegister, $banMember)) {
                header('location:' . AddressMyWebsite . 'adminListMember');
            }


        }


        //------------------------------------------ view

        $this->loadView('/admin/update/editMember', array('title' => 'ویرایش کاربر',
            'listMemberById' => $memberModel->listMemberWithId($id)));
    }

}