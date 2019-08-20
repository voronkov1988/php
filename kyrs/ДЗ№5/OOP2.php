<?php
abstract class NewItem
{
    public $description;
    public $price;
    public $ves;
    private static $id = 0;

    public function __construct(string $description, int $price, int $ves){
        self::$id++;
        $this->description = $description;
        $this->price = $price;
        $this->ves = $ves;
    }

    public function kol(){
        echo self::$id;
    }

    public function DescribeNewItem(){
        echo "<br>название товара -" . $this->description . "<br>";
        echo "Цена товара -" . $this->price . "<br>";
        echo "Вес товара -" . $this->ves . "<br>";
    }

    public function NDS(){
        echo $this->price + ($this->price * 0.13) . "- Цена Товара с НДС";
    }

    abstract protected function showImage();

}

class Chocolate extends NewItem
{
    public $call;
    public function __construct(string $description, int $price, int $ves, int $call)
    {
        $this->call = $call;
        parent::__construct($description, $price, $ves);
    }

    public function DescribeNewItem()
    {
        echo "<br>название товара -" . $this->description . "<br>";
        echo "Цена товара -" . $this->price . "<br>";
        echo "Вес товара -" . $this->ves . "<br>";
        echo "Количество каллорий - " . $this->call . "<br>";
    }
    public function showImage(){
        echo "<div><img style='height: 200px; width: 200px; background-color: darkgray;' src='chokolate.jpg' alt=''></div>";
    }
}

class Candy extends NewItem
{
    public function __construct($description, $price, $ves)
    {
        parent::__construct($description, $price, $ves);
    }
    public function showImage(){
        echo "<div><img style='height: 100px; width: 100px; background-color: darkgray;' src='candy.png' alt=''></div>";
    }
}

$newitem1 = new Chocolate('шоколадка', '12', '20', '100');
$newitem1 -> DescribeNewItem();
$newitem1 -> NDS();
$newitem1 -> showImage();

$newitem2 = new Candy('конфета', '10', '2');
$newitem2 -> DescribeNewItem();
$newitem2 -> NDS();
$newitem2 -> showImage();

$newitem3 = new Candy('конфета', '10', '2');
$newitem3 -> DescribeNewItem();
$newitem3 -> NDS();
$newitem3 -> showImage();

$newitem4 = new Candy('конфета', '10', '2');
$newitem4 -> DescribeNewItem();
$newitem4 -> NDS();
$newitem4 -> showImage();

$newitem5 = new Candy('2323',123, '2323');
$newitem1 ->kol();


