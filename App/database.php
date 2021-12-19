<?php
// عملیات های مهم در این دایرکتوری app قرار می گیرد


class database
{
    protected $connect;  // سطح دسترسی : پروتکتید یعنی می تواند هم در درون کلاس و کلاس فرزند استفاده کنیم ولی   در بیرون کلاس نمی شود

    public function __construct()
    {
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // persian  مشکل حروف فارسی حل کردیم
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, //warning    این جا آمدیم و ارور لاگ رو فعال کردیم
        );

        $this->connect = new PDO('mysql:host=localhost;dbname=mvcdigikala', 'root', '', $options);
    }
}

$object = new database();