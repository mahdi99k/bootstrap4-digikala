<?php

//------------------------------------------------------A  عملکردهای محاسباتی     +  -  *  /  %   **
$a = 10;
$b = 3;
//echo $a % $b;  // 10 - 9 = 1     10 / 3 = 9    // نمایش باقی مانده


//------------------------------------------------------B  عملگر های افزایشی  کاهشی    ++  --
$a = 5;
//echo $a++ . "<br>";   // اول نمایش میده دفعه بعدی اضافه
//echo ++$a . "<br>";   // اول اضافه میکند بعد نمایش

//echo $a-- . "<br>";  // اول نمایش میده دفعه بعدی کم می کند
//echo --$a . "<br>";   // اول کم میکند بعد نمایش


//------------------------------------------------------C  عملگر های انتساب  = +=  -=  /=  *=  %=
$x = 8;  // هشت بریز درون $a   +    سمت راست بریز سمت چپ
$a = 11;
//echo $a += 10;  // $a =   $a + 10


//------------------------------------------------------D  عملگرهای مقایسه ای   > <  ==  =<  >=    != <>
//var_export(5 != 9 );       // true
//var_export(5 === '5');  // = = مقدار یا اعداد یکی باش        = = = علاوه بر مقدار یا اعداد یکی باش باید نوع تایپ بررسی می کند
//var_export(5 <=> 4); // مقدار سمت راست  بزرگتر باش منفی یک     مقدار سمت چپ بزرگتر باش مقدار مثبت یک      هر دو مساوی بود صفر
//var_dump(5 <= 9);               // bool(true)


//------------------------------------------------------E  عملگرهای منطقی   && => AND        || => OR
$a = true;
$b = false;
$c = false;
//var_export($a || $b);
//var_export($a xor $b);  // باید یک طرف true  و یک طرف false باشد


//------------------------------------------------------E  عملگر های سه گانه      ??     ?:
$a = 11;  // برو بعدی نمایش بده   اگر null نبود خودش نمایش بده
$b = 3;
//echo $a ?? $b;   // اگر a$  null نبود خودش نمایش      اگر null بود $b نمایش بده


// تفاوت این دو متغیر : که اگر متغیر تعریف نشده باشد در دابل علامت سوال خطا نمیده ولی در دیگری notice می دهد

// ?:  تبدیل به بولین می کند اگر true بود خودش نمایش    اگر false  بود دیگری نمایش
//var_export((boolean)$a);
//var_export($a ?: $b);  // تغییر نوع تایپ  (boolean)


//------------------------------------------------------F   درون آرایه از عملگرهای مقایسه ای استفاده کرد ؟
$a = array(10, 100);   // کمتر باش تو حالت + اجتماع = آرایه اول تا جایی که هست نمایش میده  ادامش از آرایه دوم
$b = array(20, 200, 2000, 4000, 6000);
//var_export($a == $b);
//var_export($a + $b);  // مفهوم اجتماع دارد   + عضو های آرایه اول نمایش میده


//------------------------------------------------------F  الویت عملگر ها
//  ++  --  !
//  *   /   %
//  +   -
//  <  <=   >  >=
//  == === !=  !==  <>
//  .    (concat)
//  &&
//  OR
//  ??  ?:
//  =  +=  -=  *=  /=  %=


//


//$a = 2;
//echo 4 + 5 * $a++;  // 2 * 5 + 4      => 14

//$a = 4;
//var_export(5 * $a++ > 6 * $a-- / 2);   // (20)  >  30 / 2 = (15)       true
//var_export($a++ < $a--);  //  اولی مقدارش چهار      دومی چون باز دالر استفاده کردیم مقدارش میشه پنج

//echo 5 + 5 * 3;  // 15  + 5    ==> 20

//$a = 1;
//echo 2 * 2 + 3 / ++$a;    //        2 * 2  +   3 / 2 (1.5)       ===> 5.5


//var_export(true === !true);
//var_export(true || false && true);  // true
//var_export(true && true && true || false && false);  // true  || false     ===> true


//var_export(5 > 12 && 0);   // false  &&   0(false)
//var_export(0 > 1 == true);  // false  == true


//$a = 3;
//var_export($a *= 2 * 5 - 1 % 2);
//         $a *=  10   - 1     3*9 ==> 27


//var_export(2 * 2 . '5');              // 45
//var_export(2 . 2 * 5);        // 210


//------------------------------------------------------G  ابهام زدایی علامت $

$a = 'b';
$b = 'c';
$c = 'd';

//echo $$b;  // d


$reza = "mahdi";
$mahdi = 'amir';
$amir = 'ali';

//echo $$reza;  // amir


//------------------------------------------------------H  LESSON 36      const   OR   define
//  define باشد یعنی به حروف بزرگ و کوچک حساس نباش true  حالت سومش اگر
// درون شزط هایمان و توابع فانکشن باید از define استفاده کنیم

const name = 'mahdi';
//define('name', 'mahdi', true);  // true    سومی یعنی به حروف بزرگ و کوچک حساس نیست
//echo NaMe;

$x = 1;
if ($x == 1) {
    define('answer', 'ok');
//    echo answer;
} else {
    define('answer', 'error');
    echo answer;
}

/*function chop()
{
    define();
}*/

$name = 'var';
define("define_$name", 'hello');
//echo define_var;

//var_export(defined('name'));  // آیا وجود دارد این پراپرتی؟    Boolean


//------------------------------------------------------I  string  integer boolean

$x = 1;
$y = 'ok';

//echo gettype($x) . '<br>' . gettype($y) . "<br>";

settype($x, 'boolean');
settype($y, 'integer');

//echo gettype($x) . '<br>' . gettype($y) . "<br>";


function check_integer($input)
{
    if (is_int($input) || is_float($input)) {         // Just Number
        return $input;

    } else {
        settype($input, 'integer');
        return $input;
    }
}

//echo check_integer(2468);      // تبدیل به integer


//var_export(ctype_digit('12345'));   // تبدیل به integer

if (isset($_POST['btn'])) {
    if (ctype_digit($_POST['name'])) {
//        echo $_POST['name'];

    } else {
//        echo 'is String';
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Basic</title>
</head>
<body>
<!--<form method="post">

    <input type="text" name="name" placeholder="دنبال چه می گردی؟" style="width: 500px;height:13px!important;padding: 10px;
            border-radius: 7px;margin-left: 32%;font-size: 19px;text-align: right;background: navajowhite">

    <br><br><br>

    <button name="btn" style="width: 200px;height: 9px;padding: 20px 20px;border-radius: 7px;margin-left: 42%;text-align: center;
    font-size: 20px;line-height: 9px;background: #20c997;color: white">ارسال
    </button>

</form>-->
</body>
</html>


<!--=====================================    forget password   =====================================-->
<?php
require_once "functions.php";

if (isset($_POST['btnLogin'])) {

    if (login($_POST['email'], $_POST['password'])) {
        echo "ok";
    } else {
        echo 'error';
    }

}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container" style="margin-top: 50px">


    <div class="col-sm-8 col-sm-offset-2">

        <div class="panel panel-success">
            <div class="panel-heading text-center">Login | Register</div>


            <div class="panel-body">
                <form method="post">

                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" name="email" class="form-control" id="email"
                               placeholder="ایمیل خود را وارد نمایید">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password :</label>
                        <input type="password" name="password" class="form-control" id="pwd"
                               placeholder="رمز عبور را وارد نمایید">
                    </div>

                    <div class="checkbox"><label><input type="checkbox" name="remember">Remember me</label></div>
                    <br>

                    <button type="submit" name="btnLogin" class="btn btn-success btn-block"
                            style="font-size: 16px;font-family: Vazir">Login
                    </button>
                    <br>

                    <a href="resetPassword.php" class="btn btn-info btn-block"
                       style="font-size: 16px;font-family: Vazir">Reset Password</a>
                    <br>
                </form>
            </div>

        </div>
    </div>

</div>


</body>
</html>































