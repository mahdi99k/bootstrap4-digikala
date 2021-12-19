<!--<div class="justify-content-center">-->

<div class="col-sm-8 mr-5" style="margin-right:24%!important;">

    <div class="card card-info">
        <div class="card-header">
            <h1 class="card-title p-2 mb-4 text-center bg-primary" style="font-size: 22px">تغییر پسوورد مدیریت</h1>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post">
            <div class="card-body">


                <?php
                if ($zicco['messErrChaPassAdm'] != null) {
                    echo "<div class='alert alert-danger p-2 mb-4 text-center'>" . $zicco['messErrChaPassAdm'] . "</div>";
                } ?>


                <?php
                if ($zicco['messSuccessChaPassAdm'] != null) {
                    echo "<div class='alert alert-success p-2 mb-4 text-center'>" . $zicco['messSuccessChaPassAdm'] . "</div>";
                } ?>


                <div class="form-group">
                    <input type="password" name="passwordOldAdmin" class="form-control p-2 mb-4" id="exampleInputEmail1"
                           placeholder="پسورد قبلی خود را وارد نمایید">
                </div>
                <div class="form-group">
                    <input type="password" name="passwordNewAdmin1" class="form-control p-2 mb-4"
                           id="exampleInputPassword1" placeholder="پسورد جدید خود را وارد نمایید">
                </div>
                <div class="form-group">
                    <input type="password" name="passwordNewAdmin2" class="form-control p-2 mb-4"
                           id="exampleInputPassword1" placeholder="پسورد جدید خود را مجددا وارد نمایید">
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" name="btnChangePasswordAdmin" class="btn btn-info bg-primary p-2 mt-5 btn-block">
                    اعمال تغییرات
                </button>
            </div>
        </form>
    </div>

</div>

<!--</div>-->
