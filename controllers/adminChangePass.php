<?php


class adminChangePass extends controller
{

    public function indexAction()
    {

        $messErrChaPassAdm = null;
        $messSuccessChaPassAdm = null;
        if (isset($_POST['btnChangePasswordAdmin'])) {  // حتما مقادیر پر باش و خالی هم نباشند
            if (isset($_POST['passwordOldAdmin']) && isset($_POST['passwordNewAdmin1']) && isset($_POST['passwordNewAdmin1'])) {
                if (!empty($_POST['passwordOldAdmin']) && !empty($_POST['passwordNewAdmin1']) && !empty($_POST['passwordNewAdmin2'])) {

                    $model_changePassword = $model_changePass = $this->loadModel('adminChangePassModel');  // وصل شدن به مادل
                    $model_changePassAdmin = $model_changePassword->checkPasswordAdmin(hashPassword($_POST['passwordOldAdmin'])); // پسوورد درون دیتابیس
                    if ($model_changePassAdmin) {  // پسوورد قدیمی درون دیتابیس
                        if ($_POST['passwordNewAdmin1'] == $_POST['passwordNewAdmin2']) {  // پسوورد های جدید با هک یکشان باشند

                            $newPassword = hashPassword($_POST['passwordNewAdmin1']);  // پسسورد جدید هش می شود
                            if ($model_changePassword->changePasswordAdmin($newPassword)) {  // اپدیت پسوورد جدید
                                $messSuccessChaPassAdm = "تغییر پسوورد با موفقیت انجام شد";
//                              header('location:' . AddressMyWebsite . 'adminExit');  // رفتن به صفحه لاگین
                            }


                            //
                        } else {
                            $messErrChaPassAdm = "پسوورد جدید و تکرار پسوورد جدید با هم یکسان نمی باشد لطفا مجددا وارد نمایید";
                        }
                    } else {
                        $messErrChaPassAdm = "پسوورد قدیمی شما درست نمی باشد لطفا مجددا تلاش نمایید !";
                    }
                } else {
                    $messErrChaPassAdm = "لطفا تمام مقدار ها را وارد نمایید ! ";
                }
            }
        }


        // -----------------------------------------------------------  View

        $this->loadView('/admin/changePassword/changePasswordIndex', array('title' => 'تغییر پسوورد پنل مدیریت',
            "messErrChaPassAdm" => $messErrChaPassAdm, 'messSuccessChaPassAdm' => $messSuccessChaPassAdm));
    }

}





