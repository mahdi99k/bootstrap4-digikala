<!-- ورودی های صفحه لاگین -->

<div id="register">

    <div class="register_header" style="margin-right: 100px !important;margin-bottom: 30px !important;">
        <img src="<?php AddressMyWebsite ?> image/register_page.png">
    </div>
    <div class="form_register">


        <?php
        if ($zicco['messageLoginErrSite'] == !null) {
            echo "<div class='alert alert-danger bg-danger text-white p-2' style='margin-right: 35%!important;margin-left: 30%!important;'>
            " . $zicco['messageLoginErrSite'] . "</div>";
        } ?>


        <form id="form_register" method="post">
            <div>
                <label class="BYekan-sm p-4">ایمیل</label>
                <input class="BYekan-sm p-2 pr-5 pl-5" type="text" name="email_login_User"
                       placeholder="ایمیل خود را وارد کنید">
            </div>
            <div>
                <label class="BYekan-sm p-4">رمز عبور</label>
                <input class="BYekan-sm p-2 pr-5 pl-5" type="password" name="password_login_User"
                       placeholder="لطفا یک رمز عبور معتبر وارد کنید">
            </div>

            <div>
                <label class="BYekan-sm p-3 pr-5">مرا بخاطر بسپار</label>
                <input class="checkbox p-2 pr-5 pl-5" type="checkbox" name="remember">
                <a class="BYekan-sm pr-4" href="<?php echo AddressMyWebsite . "forgetPassword" ?>
                 ">رمز عبور را فراموش کرده ام
                </a>
            </div>
            </br>
            <div class="btn_register p-4" style="margin-right: 90px !important;">
                <button class="BYekan-sm btn btn-info bg-info text-white p-2 pr-5 pl-5" name="btn_login_User">
                    ورود به وبسایت
                </button>
            </div>
        </form>
    </div>
</div>

<!-- ورودی های صفحه لاگین -->