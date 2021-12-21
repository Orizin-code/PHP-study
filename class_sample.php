<?php

//クラス：車の設計図
class Car {

    private $price;
    private $color;
    private $capacity;

    public function __construct($price, $color, $capacity) {
        $this->price = $price;
        $this->color = $color;
        $this->capacity = $capacity;
    }
}


//設計図から生み出された車
$car1 = new Car(1000021, "red", 4);
$car2 = new Car(1002000, "blue", 20);
$car3 = new Car(3000000, "green", 6);
$car4 = new Car(1500000, "yellow", 8);
$car5 = new Car(8000000, "red", 6);
$car6 = new Car(4000000, "dark", 4);
$car7 = new Car(1030000, "white", 2);
$car8 = new Car(1000930, "green", 4);
$car9 = new Car(5000000, "yellow", 40);
$car10 = new Car(3000000, "red", 8);

?>

<?php

class Car {
    private $color;
    //$colorに値を代入（変数に値を設定するのでセッターと呼ばれている）
    public function setColor($color) {
        $this->color = $color;
    }
}

$car = new Car;

//Carクラスの$colorにセッターを利用してredを代入
$car->setColor("red");
?>

<?php

class Car {
    private $color;

    //constructメソッドで初期値を設定
    public function __construct() {
        $this->color = "red";
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }
}

//インスタンス化された瞬間にconstructソッドが呼び出され
//$colorにredが代入される
$car = new Car;

//$colorに代入する記述がいらなくなる
//$car->setColor("red");

//$colorを呼び出すとredが表示される
echo $car->getColor();

?>

<?php

class Car {
    //プロパティを追加で定義
    private $color;
    private $price;
    private $capacity;

    //constructメソッドにも引数を追加
    public function __construct($color, $price, $capacity) {
        $this->color = $color;
        $this->price = $price;
        $this->capacity = $capacity;
    }


    public function getColor() {
        return $this->color;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCapacity() {
        return $this->capacity;
    }
}

//インスタンス化する際にconstructソッドに値を渡す
$car1 = new Car("red", 1000000, 4);
$car2 = new Car("green", 1500000, 5);
$car3 = new Car("blue", 3000000, 8);


echo $car1->getColor();
echo $car2->getColor();
echo $car3->getColor();

echo $car1->getPrice();
echo $car2->getPrice();
echo $car3->getPrice();

echo $car1->getCapacity();
echo $car2->getCapacity();
echo $car3->getCapacity();

?>