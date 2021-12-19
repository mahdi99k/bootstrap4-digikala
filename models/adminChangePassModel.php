<?php


class adminChangePassModel extends database
{

    //------------------------------------------------------------------------a) چک کردن پسوورد قدیم در دیتابیس

    public function checkPasswordAdmin($password)
    {
        $sql = "SELECT `password` FROM `mahdi99k_ta_usersadmin` WHERE `password`=? LIMIT 1 ";  // LIMIT  با یک سطر کار داریم
        $result = $this->connect->prepare($sql);
        $result->bindValue(1, $password);
        $result->execute();

        if ($result->rowCount() == 1) {
            return true;  // اگر پیدا کرد پسوورد ترو برگردون

        } else {
            false;
        }
    }

    //------------------------------------------------------------------------b) اضافه کردن یا تغییر پسوورد جدید 


    public function changePasswordAdmin($password)
    {
        $sql = "UPDATE `mahdi99k_ta_usersadmin` SET `password`=? LIMIT 1";
        $result = $this->connect->prepare($sql);
        $result->bindValue(1, $password);
        if ($result->execute()) {
            return true;
        } else {
            return false;
        }
    }


}