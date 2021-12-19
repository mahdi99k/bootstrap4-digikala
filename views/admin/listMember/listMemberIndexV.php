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
                <div class="row justify-content-center">

                    <!--   کدهای خودمان را قرار میدهیم   -->
                    <div class="col-sm-8" style="margin-right: 13%!important;">


                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title text-center p-2 pt-3 pb-3  bg-success card-info"
                                    style="font-size: 23px !important;">لیست کاربران</h2>

                                <div class="card-tools"></div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table  table-hover table-bordered table-primary">
                                    <tbody>

                                    <tr class="text-center" style="font-size: 17px !important;">
                                        <th class="p-3">شماره</th>
                                        <th class="p-3">نام و نام خانوادگی</th>
                                        <th class="p-3">یوزر نیم</th>
                                        <th class="p-3">ایمیل</th>
                                        <th class="p-3">بلاک | عادی</th>
                                        <th class="p-3">عملیات</th>

                                    </tr>


                                    <?php
                                    if (!empty($zicco['member_model']->listMember())) {
                                        foreach ($zicco['member_model']->listMember() as $value) { ?>
                                            <tr class="text-center">
                                                <td><?php echo $value->id; ?></td>
                                                <td><?php echo $value->info ?></td>
                                                <td><?php echo $value->username; ?></td>
                                                <td><?php echo $value->email; ?></td>
                                                <td><?php echo $value->status ?></td>
                                                <td>
                                                    <a href="<?php echo AddressMyWebsite . 'update/editMember/' . $value->id ?>"
                                                       class="badge  badge-info bg-info text-white mb-1 mt-1"
                                                       style="padding: 11px!important;">ویرایش</a>


                                                    <span class="mr-2 ml-2"></span>


                                                    <a href="<?php echo AddressMyWebsite . 'adminDelete/deleteMember/' . $value->id ?>"
                                                       class="badge badge-danger bg-danger text-white mb-1 mt-1"
                                                       style="padding: 11px!important;">حذف</a>
                                                </td>
                                            </tr>
                                        <?php }
                                    } else {
                                        echo "<div class='alert alert-info text-center p-2 m-2 mt-3 mb-3'>کاربری در وبسایت ثبت نام نکرده است</div>";
                                    } ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


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




