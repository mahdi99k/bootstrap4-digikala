<?php
require_once 'functions.php';

/*if (isset($_GET['token'] && !empty($_GET['token']))) {
    if (checkdate($_GET['token'])) {

        if (isset($_POST['btnResetDone'])) {
            if ($_POST['password1'] == $_POST['password2']) {

                change_password($_POST['password1'], $_GET['token']);


            } else {
                echo "پسوورد ها یکی نیستند!";
            }
        }

    } else {
        header('location:http://localhost/MVC_Digikala/phpBasic/index_phpBasic.php');
    }

} else {
    header('location:http://localhost/MVC_Digikala/phpBasic/index_phpBasic.php');
}
*/

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

        <div class="panel panel-primary">
            <div class="panel-heading text-center">New Password</div>


            <div class="panel-body">
                <form method="post">


                    <div class="form-group">
                        <label for="pwd">Password :</label>
                        <input type="password" name="password1" class="form-control" id="pwd"
                               placeholder="رمز عبور را وارد نمایید">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Again Password :</label>
                        <input type="password" name="password2" class="form-control" id="pwd"
                               placeholder="رمز عبور را مجددا وارد نمایید">
                    </div>

                    <div class="checkbox"><label><input type="checkbox" name="remember">Remember me</label></div>
                    <br>

                    <button type="submit" name="btnResetDone" class="btn btn-primary btn-block"
                            style="font-size: 16px;font-family: Vazir">Reset Password
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

