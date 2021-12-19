<?php // how enable extension gd2 xampp     چگونه کتاب خانه (جی دی 2) فعال در زمپ فعال کنیم

session_start();   // سشن نوعی از متغیر است که مقادیر در صفحات مختلف جا به جا می کند
header('Content-text:image/Png');
$randomNumbers = rand(111111, 99999);  // اعداد 5 رقمی یا 6 رقمی   +    اولی شروع    دومی پایان
$_SESSION['random_number'] = $randomNumbers;

if (isset($_SESSION['random_number'])) {
    $text = $_SESSION['random_number'];
    $width = 140;                                    // عرض تصویری که میخواهیم قرار دهیم
    $height = 40;                                    // ارتفاع تصویری که میخواهیم قرار دهیم
    $fontSize_textImage = 22;                        // اندازه یا فونت نوشته های درون تصویر
    $newImage = imagecreate($width, $height);         // برای امنیت در صفحات لاگین و مخصوصا ریجستر gd2  +   اولی عرض  دومی ارتفاع
    $fontFamily = "captchfont.ttf";                   // نام فونت فمیلی
    $background_color = imagecolorallocate($newImage, 255, 114, 160);  // رنگپس زمینه درون تابع مشخص می کنیم
    $textImage_color = imagecolorallocate($newImage, 0, 0, 0);        // رنگ نوشته های درون تابع مشخص می کنیم


    // اول عکس ما (همراه عرض و ارتفاع)   +   دوم سایز فونت   +   سوم زاویه   +   چهارم زاویه محور x   +  پنجم زاویه محور y  +   هفتم رنگ متن   +   هشتم فونت فمیلی   +   نهم متن ما
    imagepng($newImage);  // پسوند تصویر
    imagettftext($newImage, $fontSize_textImage, 0, 20, 30, $textImage_color, $fontFamily, $text);
    imagedestroy($newImage);  // کاهش فشار به سرور  +   تغییر کد امنیتی به صورت رندوم بار  + میاد هی حذف می کند

}







