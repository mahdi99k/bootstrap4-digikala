<?php


class memberModel extends database
{

    //------------------------------------------------------- insert اضافه کردن به دیتابیس

    public function register($info, $username, $email, $password)
    {
        $sql = "INSERT INTO `mahdi99k_ta_users` SET `info`=? , `username`=? , `email`=? , `password`=?";
        $result = $this->connect->prepare($sql);
        $result->bindValue(1, $info);
        $result->bindValue(2, $username);
        $result->bindValue(3, $email);
        $result->bindValue(4, $password);
        if ($result->execute()) {   // خروجی به صورت بولینن (یا انجام میشه یا انجام نمیشه)
            return true;

        } else {
            return false;
        }

    }


    //------------------------------------------------------- email unique  حالت منحصر به فرد داشته باش


    public function checkEmail($email)
    {
        $sql = "SELECT `email` FROM `mahdi99k_ta_users` WHERE `email`=? ";
        $result = $this->connect->prepare($sql);
        $result->bindValue(1, $email);
        $result->execute();
        if ($result->rowCount() == 1) {  // ایمیلی که کاربر وارد کرده یکی قبلا این ایمیل داشته
            return true;

        } else {
            return false;  // این ایمیل کاربر کسی نداشته
        }
    }


    //------------------------------------------------------- list Member  نمایش لست کاربران

    public function listMember()
    {
        $sql = "SELECT * FROM `mahdi99k_ta_users`  ";
        $result = $this->connect->prepare($sql);
        $result->execute();

        if ($result->rowCount() >= 1) {
            return $result->fetchAll(PDO::FETCH_OBJ);   // واکشی کردن در صورتی که یک سطر یا بیشتر بتونه پیدا کنه

        } else {
            return false;
        }
    }


    //------------------------------------------------------- count user  تعداد کاربران چند تا؟

    public function countMember()
    {
        $sql = "SELECT COUNT(id) AS `membercount` FROM `mahdi99k_ta_users`"; // COUNT(id)  تعداد کاربران از طریق آیدی + تغییر اسم با AS
        $result = $this->connect->prepare($sql);
        $result->execute();
        if ($result->rowCount() >= 1) {
            return $result->fetchAll(PDO::FETCH_OBJ)[0]->membercount;

        } else {
            return false;
        }

    }


    //-------------------------------------- delete member
    public function deleteMember($id)
    {
        $sql = " DELETE FROM `mahdi99k_ta_users` WHERE id=? ";
        $result = $this->connect->prepare($sql);
        $result->bindValue(1, $id);
        if ($result->execute()) {
            return true;
        } else {
            return false;
        }
    }


    //------------------------------------------------  editMember   گرفتن و نمایش جدول

    public function listMemberWithId($id)
    {
        $sql = "SELECT *FROM `mahdi99k_ta_users` WHERE `id`=?";
        $result = $this->connect->prepare($sql);
        $result->bindValue(1, $id);
        $result->execute();

        if ($result->rowCount() == 1) {
            // اطلاعات واکشی کن اگریک سطر یا بیشتر پیدا کردی
            return $result->fetch(PDO::FETCH_OBJ);

        } else {
            return false;
        }
    }


    //------------------------------------------------  editMember   آپدیت کردن جدول
    public function updateMember($info, $username, $email, $banMember)
    {
        $sql = "UPDATE `mahdi99k_ta_users` SET `info`=? , `username`=? , `email`=? , `status`=?";
        $result = $this->connect->prepare($sql);
        $result->bindValue(1, $info);
        $result->bindValue(2, $username);
        $result->bindValue(3, $email);
        $result->bindValue(4, $banMember);

        if ($result->execute()) {
            return true;
        } else {
            return false;
        }
    }


    //------------------------------------------------  login user  کد های ورود به سایت

    public function loginToSite($email, $password)
    {
        $sql = "SELECT * FROM `mahdi99k_ta_users` WHERE `email`=? AND `password`=?";
        $result = $this->connect->prepare($sql);
        $result->bindValue(1, $email);
        $result->bindValue(2, $password);
        $result->execute();

        if ($result->rowCount() == 1) {    //unique  به صورت منحصر به فرد باید مساوی مساوی باشد
            return true;
        } else {
            return false;
        }
    }


    //--------------------------------------------------- login member ban status   کاربر بلاک نشده باشد

    public function checkBanMember($email)
    {
        $sql = "SELECT * FROM `mahdi99k_ta_users` WHERE `email`=? ";
        $result = $this->connect->prepare($sql);
        $result->bindValue(1, $email);
        $result->execute();

        if ($result->rowCount() == 1) {
            return $result->fetch(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }


}



