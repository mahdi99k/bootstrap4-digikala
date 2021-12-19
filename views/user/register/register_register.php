<!-- ورودی های اینپوت ریجستر سایت -->
<div id="register">
    <div class="register_header" style="margin-right: 100px !important;margin-bottom: 30px !important;">
        <img src="<?php AddressMyWebsite ?> image/register_page.png" class="img-fluid">
    </div>


    <?php
    if ($zicco['messageError'] == !null) {
        echo "<div class='alert alert-danger bg-danger  w-50 text-center text-white p-2'
          style='margin-right: 29%!important;'>" . $zicco['messageError'] . "</div>";
    } ?>



    <?php
    if ($zicco['messageSuccess'] == !null) {
        echo "<div class='alert alert-success bg-success  w-50 text-center text-white p-2'
          style='margin-right: 29%!important;'>" . $zicco['messageSuccess'] . "</div>";
    } ?>


    <div class="form_register">
        <form id="form_register" method="post" action="<?php $_SERVER['PHP_SELF'] ?>"> <!-- security + همین صفحه -->
            <div>
                <label class="BYekan-sm p-4">نام و فامیل : </label>
                <input class="BYekan-sm p-2 pr-5 pl-5" type="text" name="infoRegister"
                       placeholder="نام و فامیل خود را وارد کنید">
            </div>
            <div>
                <label class="BYekan-sm p-4">نام کاربری * : </label>
                <input class="BYekan-sm p-2 pr-5 pl-5" type="text" name="usernameRegister"
                       placeholder="نام کاربری خود را وارد کنید">
            </div>
            <div>
                <label class="BYekan-sm p-4 pr-5">ایمیل * : </label>
                <input class="BYekan-sm p-2 pr-5 pl-5" type="email" name="emailRegister"
                       placeholder="لطفا ایمیل معتبر وارد کنید">
            </div>

            <div>
                <label class="BYekan-sm p-4">رمز عبور * : </label>
                <input class="BYekan-sm p-2 pr-5 pl-5" type="password" name="passwordRegister"
                       placeholder="لطفارمز عبور معتبر وارد کنید">
            </div>

            <div>
                <label class="BYekan-sm p-4">تکرار پسوورد: </label>
                <input class="BYekan-sm p-2 pr-5 pl-5" type="password" name="againPasswordRegister"
                       placeholder="رمز عبور خود را مجددا وارد نمایید">
            </div>

            <!-----------------------------------------   captcha   ----------------------------------------------->

            <img style="margin-top: 20px!important;" src="<?php echo AddressMyWebsite . '/tools/captcha.php' ?>"
                 alt="image">

            <div>
                <label class="BYekan-sm p-4">کد امنیتی :</label>
                <input class="BYekan-sm p-2 pr-5 pl-5" type="text" name="captchaCode"
                       placeholder="کد امنیتی بالا را وارد نمایید">
            </div>


            <div class="btn_register p-4 pl-5" style="margin-right: 80px!important;">
                <button class="BYekan-sm btn bg-success p-2 pr-5 pl-5 text-white" name="submitRegister">ثبت نام</button>
            </div>
        </form>
    </div>
</div>
<!-- ورودی های اینپوت ریجستر سایت -->
