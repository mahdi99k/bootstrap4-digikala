<?php


class indexModel extends database
{

    public function insert_database($name, $username, $password)
    {
        $sql = "INSERT INTO `tblzicco` SET `name`=?,`username`=?,`password`=?";
        $result = $this->connect->prepare($sql);
        $result->bindValue(1, $name);
        $result->bindValue(2, $username);
        $result->bindValue(3, $password);
        $result->execute();
    }

    public function select_database()
    {
        $sql = "SELECT * FROM `tblzicco`";
        $result = $this->connect->prepare($sql);
        $result->execute();

        if ($result->rowCount() >= 1) {
            return $result->fetchAll(PDO::FETCH_ASSOC);

        } else {
            return false;
        }

    }


}


