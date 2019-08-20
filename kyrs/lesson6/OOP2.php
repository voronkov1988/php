<?php

interface iWatch
{
    public function sum1();
}

interface iPhone
{
    public function sum2();
}

interface iPad
{
    public function sum3();
}

abstract class NewItem implements iPhone, iWatch, iPad
{
    public $description;
    public $price;
    public $ves;


    static public $companyName = 'Alenka';
    const YEAR_START = '2019';

    public static function info()
    {
        echo NewItem::$companyName . "<br>";
        echo NewItem::YEAR_START . "<br>";
    }


    public function __construct(string $description, int $price, int $ves)
    {
        $this->description = $description;
        $this->price = $price;
        $this->ves = $ves;
    }

    public function DescribeNewItem()
    {
        echo "<br>название товара -" . $this->description . "<br>";
        echo "Цена товара -" . $this->price . "<br>";
        echo "Вес товара -" . $this->ves . "<br>";
    }

    public function NDS()
    {
        echo $this->price + ($this->price * 0.13) . "- Цена Товара с НДС";
    }

    function showImage()
    {
        echo "<div><img src='candy.png'</div>";
    }
}

class Chocolate extends NewItem
{
    static $test = 123;
    public $call;

    public function __construct(string $description, int $price, int $ves, int $call)
    {
        $this->call = $call;
        parent::__construct($description, $price, $ves);
    }

    public function __set($name, $value)
    {
        echo "вы не можете присвоить значение $value несуществующему свойству $name<br>";
    }

    public function sum1()
    {
        echo "Страна производитель - Россия <br>";
    }

    public function sum2()
    {
        echo "Срок годности - 3 мес <br>";
    }

    public function sum3()
    {
        echo "Масса - 20 грамм <br>";
    }

    public function DescribeNewItem()
    {
        echo "<br>название товара -" . $this->description . "<br>";
        echo "Цена товара -" . $this->price . "<br>";
        echo "Вес товара -" . $this->ves . "<br>";
        echo "Количество каллорий - " . $this->call . "<br>";
    }

    public function showImage()
    {
        echo "<div><img style='height: 200px; width: 200px; background-color: darkgray;' src='chokolate.jpg' alt=''></div>";
    }
}

class Candy extends NewItem
{
    public function __construct($description, $price, $ves)
    {
        parent::__construct($description, $price, $ves);
    }

    public function sum1()
    {
        echo "Страна производитель - Беларусь <br>";
    }

    public function sum2()
    {
        echo "Срок годности - 2 мес <br>";
    }

    public function sum3()
    {
        echo "Масса - 30 грамм <br>";
    }

    public function __get($name)
    {
       echo "Нельзя обратиться к свойству с именем $name<br>";
    }

    public function showImage()
    {
        echo "<div><img style='height: 100px; width: 100px; background-color: darkgray;' src='candy.png' alt=''></div>";
    }
}

$newitem1 = new Chocolate('шоколадка', '12', '20', '100');
$newitem1->DescribeNewItem();
$newitem1->NDS();
$newitem1->showImage();
$newitem1->info();
$newitem1->sum1();
$newitem1->sum2();
$newitem1->sum3();
$newitem1 ->smth = 123;
NewItem::info();

$newitem2 = new Candy('конфета', '10', '2');
$newitem2->DescribeNewItem();
$newitem2->NDS();
$newitem2->showImage();
NewItem::info();
$newitem2->test;
$newitem2->Smth;
$newitem2->sum1();
$newitem2->sum2();
$newitem2->sum3();

