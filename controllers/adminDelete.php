<?php


class adminDelete extends controller
{
    protected $address = "http://localhost/MVC_Digikala/";//AddressWebSite

    public function deleteMember($id)
    {
        $memberModel = $this->loadModel("memberModel");
        if ($memberModel->deleteMember($id)) {  // خذف کاربر
            header('location:' . $this->address . 'adminListMember');
        }
    }

}