<?php

if (!isset($_SESSION['welcome_to_admin_index'])) {  // سشن ست نشده باشد  یعنی وجود نداشته باشد
    header('location:http://localhost/MVC_Digikala/adminlogin');
}

?>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <br><br><br>
    <a href="index3.html" class="brand-link">
        <img src="<?php echo AddressMyWebsite . 'public/admin/' ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <!--img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g"-->
                    <img src="<?php echo AddressMyWebsite . 'image/Mahdi.jpg' ?>"
                         class="img-circle elevation-2 mr-3" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block w-2">مهدی شیخی</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item has-treeview">  <!--  menu-open پیش فرض حالت باز است  -->
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>  <!--  dashboard داشبورد  -->
                            <p>مدیریت کاربران<i class="right fa fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo AddressMyWebsite ?>adminListMember" class="nav-link active">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست کاربران</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item has-treeview">     <!--  menu-open پیش فرض حالت باز است  -->
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fa fa-gear"></i>
                            <p>تنظیمات<i class="right fa fa-angle-left"></i></p></a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="<?php echo AddressMyWebsite ?>adminChangePass" class="nav-link active">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>تغییر پسوورد</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo AddressMyWebsite ?>adminExit" class="nav-link active">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p class="text-danger">خروج از پنل مدیریت</p>
                                </a>
                            </li>


                        </ul>
                    </li>


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>