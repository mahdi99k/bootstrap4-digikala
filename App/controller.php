<?php


class controller
{

//---------------------------------------------------   loadModel  کد فراخوانی مادل


    public function loadModel($model)
    {
        if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . '../models' . DIRECTORY_SEPARATOR . $model . '.php')) {
            require_once __DIR__ . DIRECTORY_SEPARATOR . '../models' . DIRECTORY_SEPARATOR . $model . '.php';
            $object = new $model;
            return $object;

        } else {
            return false;
        }
    }


//---------------------------------------------------   loadView  کد فراخوانی ویو


    public function loadView($view, $zicco = array())
    {
        if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . '../views' . $view . '.php')) {

            require_once __DIR__ . DIRECTORY_SEPARATOR . '../views/user/common/header.php'; // هدر سایت
            require_once __DIR__ . DIRECTORY_SEPARATOR . '../views' . DIRECTORY_SEPARATOR . $view . '.php';
            require_once __DIR__ . DIRECTORY_SEPARATOR . '../views/user/common/footer.php'; // فووتر سایت


        } else {
            return false;
        }
    }



    //---------------------------------------------------   l




}


