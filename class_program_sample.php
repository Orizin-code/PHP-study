<?php

class Product
{
    public $id;
    public $name;
    public $price;
    // クラス変数を定義
    public static $count = 0;

    public function __construct(array $array)
    {
        $this->id = Product::$count += 1;
        $this->name = $array['name'];
        $this->price = $array['price'];
    }
}

// Greengrocerクラスを定義
class Greengrocer {

    // インスタンス生成と同時に$productsを定義
    public $products;

    public function __construct($productParams)
    {
        $this->registerProduct($productParams);
    }

    // 商品を登録
    public function registerProduct($productParams)
    {
        foreach ($productParams as $productParam) {
            $this->products[] = new Product($productParam);
        }
    }

    // 商品を表示
    public function dispProducts()
    {
        echo "いらっしゃいませ！商品を選んでください。";
        echo PHP_EOL;

        foreach ($this->products as $product) {
            echo $product->id . "." . $product->name . "（" . $product->price . "円）";
            echo PHP_EOL;
        }
    }

}

// 商品データ1
$productParams1 = [
    ['name' => 'トマト', 'price' => '100'],
    ['name' => 'きゅうり', 'price' => '200'],
    ['name' => '玉ねぎ', 'price' => '300'],
    ['name' => 'なす', 'price' => '400']
];

// 追加商品データaddingProductParams1を定義
$addingProductParams1 = [
    ['name' => 'ごぼう', 'price' => '250'],
    ['name' => 'れんこん', 'price' => '350']
];

// Greengrocerクラスインスタンス生成
$greengrocer1 = new Greengrocer($productParams1);
// 商品を登録するメソッドを呼び出す
$greengrocer1->registerProduct($addingProductParams1);
// 商品を表示
$greengrocer1->dispProducts();
