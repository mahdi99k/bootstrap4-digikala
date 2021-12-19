<?php

//---------------------------------------- Session start
if (!isset($_SESSION)) {   // اگر سشن در پروژه ما اجرا نشده بود میاد استارتش میکنه
    session_start();
}
//ob_start();  // حتما باید بزنیم برای سشن بررسی میکنیم  + حل مشکل سشن


//---------------------------------------- AddressMyWebsite

const AddressMyWebsite = 'http://localhost/MVC_Digikala/';  // آدرس وب سایت ما

//---------------------------------------- security

function security($input)
{
    return (htmlentities($input));
}


//---------------------------------------- trim_url


function trim_url($url)
{
    return trim($url);
}


//---------------------------------------- hashPassword


function hashPassword($password)
{
//    return md5($password);
//    return sha1($password);
    $salt = "!@#$%^&*()_MahdiShm99Kk@3*";  // امنیت بیشتر اضافه می کند به آخر hash
    return crypt($password, $salt);  // روش بهتر انیت بالاتر
}


//---------------------------------------- random_token

function random_token()
{
    return md5(uniqid(rand()));      // token      c7d815ad7057a595275e892eaf91e9de

}


?>