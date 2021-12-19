<?php


class proccess
{
    private $controller;
    private $explode;
    private $method;
    private $location;
    private $obj;


    public function __construct()
    {
        if (isset($_GET['zicco'])) {
            //Run Code
            $url = rtrim(security($_GET['zicco']), '/'); // admin/post/4  +  rtrim  اگر ورودی ما که یک اسلش در آخر بعد چهار قرار گرفت پاک کن
            $this->explode = $this->explodeUrl($url); // array(0=>admin , 1=>post , 2=>4)
            $this->setController();
            $this->setMethod();
            $this->sortArray();  // مرتب سازی آرایه یعنی مرتب کردن شروع خانه آرایه
            $this->location = 'controllers/' . $this->controller . '.php';  // مسیر کنترولر را معرفی میکنیم
//          $this->location = __DIR__ . '/controllers' . DIRECTORY_SEPARATOR . $this->controller . '.php';   **خطا بزرگ

            $this->createObject();  // ایجاد یمک نمونه از کنترلری که کارب وارد می کند
            $this->checkMethod();  // بررسی اینکه آیا متود مورد نظر درون کنترلر می باشد یا نه
            $this->proccessApp();  // نقش پارامتر هارو دارد


        } else {  // ---- new 24
            $this->controller = 'index';
            $this->method = 'indexAction';
            $this->explode = array();

            $this->location = 'controllers/' . $this->controller . '.php';  // مسیر کنترولر را معرفی میکنیم
            $this->createObject();  // ایجاد یک نمونه از کنترلری که کارب وارد می کند
            $this->checkMethod();  // بررسی اینکه آیا متود مورد نظر درون کنترلر می باشد یا نه
            $this->proccessApp();  // نقش پارامتر هارو دارد

//            return false;
        }
    }


    //Method Explode Url  ---------------------------------
    public function explodeUrl($url)
    {
        return explode('/', $url);
    }


    // set controller --------------------------------------  new   23
    public function setController()
    {
        if ($this->explode[0] == 'indexR.php' || $this->explode[0] == null) {
            $this->controller = 'index';  // مقدار پیش فرض برابر index قرار بده

        } else {
            $this->controller = $this->explode[0];      // اومدیم و کنترلر گرفتیم و ریختیم داخل پراپرتی کنترلر و ذخیر  شده
            unset($this->explode[0]);         // خونه صفرم آرایه بعد از ریختن درون پراپرتی کنترلر که ذخیره شده + حذف کرده ایم
        }

//        echo $this->controller . "<br>";
    }

    // set Method --------------------------------------
    public function setMethod()
    {
        if (isset($this->explode[1])) {
            $this->method = $this->explode[1];     // اومدیم و متود گرفتیم و ریختیم داخل پراپرتی میتود و ذخیره شده
            unset($this->explode[1]);   // خونه یک آرایه بعد از ریختن درون پراپرتی کنترلر که ذخیره شده + حذف کرده ایم
        } else {
            $this->method = 'indexAction';
        }

//        echo $this->method . "<br>";
//        echo $this->explode[1];
    }


    //-------------------------------------------   sortArray  مرتب سازی آرایه ها
    public function sortArray()
    {
        // مرتب سازی آرایه ها
        $this->explode = array_values($this->explode);
    }

    //-------------------------------------------  proccessController  چک کردن وجود داره کنترلر

    public function createObject()
    {
        if (file_exists($this->location)) {
            require_once $this->location;  // فراخوانی کنترلر
            $this->obj = new $this->controller;  // یک نمونه از روی کنترلر خود می سازیم
            return $this->obj;
        } else {
            return false;
        }
    }

    //-------------------------------------------  checkMethod  بررسی میکنیم متودی که کاربر داخل مرورگر وارد می کند وجود دارد یا نه ؟

    public function checkMethod()
    {
        if (method_exists($this->obj, $this->method)) {     // object + method
            return true;

        } else {
            return false;
        }
    }

    //-------------------------------------------  proccessApp

    public function proccessApp()
    {
        call_user_func_array(array($this->obj, $this->method), $this->explode);
    }


}

$obj = new proccess();


