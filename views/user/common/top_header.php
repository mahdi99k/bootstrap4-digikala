<!--  start image top header -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!--            <img src="image/book.jpg" alt="book" title="یک دریا کتاب" class="img-fluid img_book_topHeader">-->
            <img src="image/gif40%25.gif" alt="book" title="حراج میان فصل" class="img-fluid img_book_topHeader">
        </div>
    </div>
</div>
<!--  end image top header -->


<!-- start header code -->
<div class="container-fluid bg-white shadow-sm">
    <div class="row">

        <div class="col-lg-2 col-md-3 col-sm-5 col1section">  <!--   ***New   -->
            <div class="logo_header">
                <a href="<?php echo AddressMyWebsite; ?>">
                    <img src="image/logoOne.svg" alt="digikala" class="img-fluid mt-4 mb-3 ml-4 logoCustom">
                </a>
            </div>
        </div>

        <div class="col-lg-5 col-md-3 col-sm-7 col2section">
            <form method="post" action="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text mt-3 mb-3 p-1 material-icons_custom rounded-right"><i
                                    class="material-icons">search</i></span>
                    </div>
                    <input type="search" class="form-control mt-3 mb-3 form_control_custom rounded-left"
                           placeholder="جستجو در دیجی کالا ..."> <!--   rounded-left  گوشه سمت چپ خمیده  -->
                </div>
            </form>
        </div>


        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
            <div class="dropdown mt-4 mb-3 mr-4 text-center col3section" style="cursor: pointer">

                <?php if (isset($_SESSION['emailMember'])) { ?>
                    <span class="mr-3" style="font-size: 14.5px;color: #00a65a!important;">کاربر گرامی به وبسایت خوش آمدید</span>
                    <span>|</span>
                    <a href="<?php echo AddressMyWebsite . '/exitSite' ?>"
                       class="btn btn-danger bg-danger text-white pr-2 pl-2 mr-3">خروج از وبسایت</a>

                    <!--------------------------------------------------------------------------------------->

                <?php } else { ?>
                    <a href="<?php echo AddressMyWebsite . "register" ?>" class="dropdown-toggle d-inline-block"
                       data-toggle="dropdown">ثبت نام </a>   <!--   ***New   -->

                    <a href="<?php echo AddressMyWebsite . "login" ?>" class="dropdown-toggle d-inline-block"
                       data-toggle="dropdown"> / ورود </a> <!--   ***New   -->
                <?php } ?>

                <div class="dropdown-menu dropdown-menu-custome mt-3 pr-4 pl-4 pt-3 pb-2 text-center rounded">
                    <div>
                        <a href="<?php echo AddressMyWebsite . "login" ?>"
                           class="btn btn-custom-item-dropdown p-2 pr-5 pl-5">ورود به دیجی کالا</a>  <!--   ***New   -->

                        <a class="dropdown-item mt-3 mb-2" style="font-size: 14px">
                            <i class="material-icons material-icons_person mr-1 ml-1" style="font-size: 27px">person_outline</i>
                            ورود به حساب کاربری</a>
                    </div>

                    <div class="mt-3 mb-2 item-dropdown-2" style="font-size:14px">
                        <span>کاربر جدید هستید؟</span>
                        <a>ثبت نام</a>
                    </div>

                    <div class="dropdown-divider"></div> <!-- خط زیر کد ها میزاره -->
                    <div style="font-size:14px">
                        <i class="material-icons material-icons_shopping mt-1 mr-1">shopping_cart</i>سبد خرید فروشگاه
                    </div>

                    <div style="font-size:14px">
                        <i class="material-icons material-icons_shopping mt-2 mr-1">favorite_border</i>علاقه مندی ها شما
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-6 col-6 col4section">
            <a class="btn btn-custom-shopping-top-header mt-3 mb-3 p-1">
                <i class="material-icons material-icons_shopping text-info mr-1">shopping_cart</i> سبد خرید
                <span class="text-white bg-info pr-1" style="border-radius: 30%">0</span>
            </a>
            <span class="mr-3 ml-2" style="border-left: 1px solid #ccc"></span>

            <i class="material-icons material-icons_person">person</i>
        </div>
    </div>
</div>
<!-- end header code   -->