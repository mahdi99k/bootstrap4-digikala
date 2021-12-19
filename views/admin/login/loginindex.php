<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/headerA.php' ?>
<br><br><br>

<div class="login-box pt-5" style="margin-right: 41% !important;box-shadow: 2px 3px 4px 3px lightgray!important;">
    <div class="login-logo pb-4">
        <a href=""><b>ورود به پنل مدیریت</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card p-4">
        <div class="card-body login-card-body">


            <?php

            if ($zicco['message_error_loginAdmin'] != null) {   // مقدار اولیه آن برابر null و زمانی مقدار میگیره که وارد else شود که کاربر ایمیل و پسوورد اشتباه بزند
                echo "<h5 class='alert alert-warning text-center p-2 mb-4'>" . $zicco['message_error_loginAdmin'] . "</h5>";
            }

            ?>


            <p class="login-box-msg pb-3">فرم زیر را تکمیل کنید و ورود بزنید</p>

            <form action="" method="post">
                <div class="input-group mb-3 ">
                    <input type="email" name="emailLoginAdmin" class="form-control pr-2" placeholder="ایمیل">
                    <div class="input-group-append">
                        <span class="fa fa-envelope input-group-text p-1 pr-2 pl-2"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="passwordLoginAdmin" class="form-control pr-2" placeholder="رمز عبور">
                    <div class="input-group-append">
                        <span class="fa fa-lock input-group-text p-1 pr-2 pl-2"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="checkbox icheck">
                            <label class="p-2 mt-3">
                                <input type="checkbox"> یاد آوری من
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" name="btnLoginAdmin"
                                class="btn btn-primary btn-block btn-flat bg-primary text-white p-2 mt-3">
                            ورود
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            <div class="social-auth-links text-center mb-3">
                <p class="pb-3 pt-4">- OR -</p>
                <a href="#" class="btn btn-block btn-primary bg-primary mb-2">
                    <i class="fa fa-facebook mr-2 bg-primary text-white p-2"></i> ورود با اکانت فیسوبک
                </a>

                <a href="#" class="btn btn-block btn-danger bg-danger">
                    <i class="fa fa-google-plus mr-2 bg-danger text-white p-2"></i> ورود با اکانت گوگل
                </a>
            </div>


            <p class="mb-1">
                <a href="#" class="text-primary">رمز عبورم را فراموش کرده ام.</a>
            </p>
            <p class="mb-0">
                <a href="register.html" class="text-center text-primary">ثبت نام</a>
            </p>
        </div>


    </div>
</div>
<br><br><br><br><br><br>


<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/footerA.php' ?>>