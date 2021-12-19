<?php
require_once 'App/config.php';  // نوشتن فانکشن ها و متود های مهم مثل امنیت
require_once 'App/database.php';  // فراخوانی دیتابیس برای مادل ها
require_once 'App/controller.php';      // فراخوانی کنترلر اصلی برای کنترلرها
require_once 'App/process.php';         // فراخوانی روتر برنامه


//============================================================================================
//admin/post/4        ------->       1)controller  +  2)method  +  3)parameter
//unset($array[1]);                       // اعضای موجود در آرایه حذف می کند
//var_dump(array_values($array));        // اگر تابع ما حذف شود و نامرتب باشه  این ارایه (مرتب میکند)
//$controller->$method();               // دسترسی پیدا کردیم به متود درون کنترلر
//$controller->$method($explode[2], $explode[3], $explode[4]);   // دسترسی پیدا کردیم به متود درون کنترلر


// Lesson   32       minute  29 : 20   (plus +2)











