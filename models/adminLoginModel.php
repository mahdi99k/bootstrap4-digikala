<?php


class adminLoginModel extends database
{

    public function login_admin($email, $password)
    {
        $sql = "SELECT * FROM `mahdi99k_ta_usersadmin` WHERE `email`=? and `password`=? ";
        $result = $this->connect->prepare($sql);
        $result->bindValue(1, $email);
        $result->bindValue(2, $password);
        $result->execute();

        if ($result->rowCount() == 1) {
            return true;

        } else {
            return false;
        }


    }
}







