<!--=====================================    forget password   =====================================-->
<?php
require_once 'functions.php';

if (isset($_POST['btnReset'])) {
    if (checkEmailExist($_POST['email'])) {
        $link = "http://localhost/MVC_Digikala/phpBasic/newPassword.php=" . sha1(md5($_POST['email']));
        update_token_for_email(sha1(md5($_POST['email'])), $_POST['email']);
//        sendMail($_POST['email' , "R E S E T P A S S W O R D" , $link]);

    } else {
        echo 'no Email';
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

        <div class="panel panel-info">
            <div class="panel-heading text-center">Reset Password</div>


            <div class="panel-body">
                <form method="post">

                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" name="email" class="form-control" id="email"
                               placeholder="برای دریافت رمز عبور جدید ایمیل خود را وارد نمایید">
                    </div>

                    <div class="checkbox"><label><input type="checkbox" name="remember">Remember me</label></div>
                    <br>

                    <button type="submit" name="btnReset" class="btn btn-info btn-block"
                            style="font-size: 16px;font-family: Vazir">Reset
                    </button>
                    <br>

                    <a href="index_phpBasic.php" class="btn btn-danger btn-block"
                       style="font-size: 16px;font-family: Vazir">Exit</a>

                    <br>

                </form>
            </div>

        </div>
    </div>

</div>


</body>
</html>










