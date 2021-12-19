<?php


class adminExit extends controller
{

    public function indexAction()
    {
        session_destroy();  // delete
        session_unset();   // delete
        header('location:http://localhost/MVC_Digikala/adminlogin');
    }


}