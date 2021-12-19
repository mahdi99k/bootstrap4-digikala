<?php


class index extends controller
{
    public function indexAction()
    {
        return $this->loadView('/user/index/index' , array('title' => 'فروشگاه اینترنتی دیجی کالا'));
        echo "<br><br><br><br>";
    }


}


