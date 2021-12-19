<?php


class exitSite extends controller
{

    public function indexAction()
    {
        session_destroy();  // delete session best
        session_unset();  // delete session
        header('location:' . AddressMyWebsite);  // بره تو صفحه لاگین یوزر یا کاربر
    }

}