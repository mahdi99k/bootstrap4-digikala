<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/headerA.php' ?>
<div class="wrapper">
    <!-- Navbar -->
    <?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/nav.php' ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/aside.php' ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <br/>
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <!--   To Do   -->

                    <div class="col-sm-8" style="margin-right: 25%!important;">

                        <div class="card card-info">
                            <div class="card-header bg-success">
                                <h3 class="card-title text-center bg-success mt-2" style="line-height: 50px!important;">
                                    ویرایش کاربران</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" method="post" action="">
                                <!-- security + همین صفحه -->
                                <div class="card-body ">
                                    <div class="form-group">
                                        <p class="text-center mt-3 mb-2">نام و نام خانوادگی</p>
                                        <input type="text" value="<?php echo $zicco['listMemberById']->info ?>"
                                               name="infoUpdateRegister" class="form-control pr-2"
                                               id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <p class="text-center mt-3 mb-2">ایمیل کاربر</p>
                                        <input type="email" value="<?php echo $zicco['listMemberById']->email; ?>"
                                               name="emailUpdateRegister" class="form-control pr-2"
                                               id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <p class="text-center mt-3 mb-2">نام کاربری کاربر</p>
                                        <input type="text" name="usernameUpdateRegister"
                                               value="<?php echo $zicco['listMemberById']->username; ?>"
                                               class="form-control pr-2" id="exampleInputEmail1">
                                    </div>

                                    <div class="form-group">
                                        <p class="text-center mt-3 mb-2">اگر مقدار را ۰ بگذارید کاربر میتواند وارد
                                            وبسایت شود در غیر این صورت اگر
                                            برابر ۱ قرار دهید امکان پذیر نیست و بن میشود</p>
                                        <input type="text" name="banMember"
                                               value="<?php echo $zicco['listMemberById']->status; ?>"
                                               class="form-control pr-2" id="exampleInputEmail1">
                                    </div>

                                    <button name="btnUpdateMember" class="btn btn-info bg-info p-2 mb-4 mt-3 btn-block">
                                        ویرایش کاربر
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!--   To Do   -->


                </div>
            </div>
        </div>
    </div>


    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            <!--        Anything you want-->
        </div>
        <!-- Default to the left -->
        <!--    <strong>CopyLeft &copy; 2018 <a href="http://github.com/hesammousavi/">وبسایت زیکو</a>.</strong>-->
    </footer>
</div>

<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/footerA.php' ?>




