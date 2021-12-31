<?php

class Product
{
    public $id;
    public $name;
    public $price;
    public static $count = 0;

    public function __construct(array $array)
    {
        $this->id = Product::$count += 1;
        $this->name = $array['name'];
        $this->price = $array['price'];
    }
}

class Greengrocer
{
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
        echo PHP_EOL;

        foreach ($this->products as $product) {
            echo $product->id . "." . $product->name . "（" . $product->price . "円）";
            echo PHP_EOL;
        }
    }

    // 個数を質問
    public function askQuantity()
    {
        echo User::$chosenProduct->name . "ですね。何個買いますか？";
        echo PHP_EOL;
    }

    // 引数を無くし、メソッド中も調整
    public function calculateCharges()
    {
        $totalPrice = User::$chosenProduct->price * User::$quantityOfProduct;
        if (User::$quantityOfProduct >= 5) {
            echo "5個以上なので10％割引となります！";
            echo PHP_EOL;
            $totalPrice *= 0.9;
        }
        echo "合計金額は" . floor($totalPrice) . "円です。";
        echo PHP_EOL;
        echo "お買い上げありがとうございました！";
        echo PHP_EOL;
    }
}

class User
{
    public static $chosenProduct;
    public static $quantityOfProduct;

    // 商品を選択
    public function chooseProduct($products)
    {
        while (true) {
            echo "商品の番号を選択>";
            $selectProductId = (int)fgets(STDIN);
            foreach ($products as $product) {
                if ($product->id === $selectProductId) {
                    User::$chosenProduct = $product;
                    break;
                }
            }
            if (isset(User::$chosenProduct)) {
                break;
            }
            echo $products[0]->id  . "~" . end($products)->id . "の番号を入力してください。";
            echo PHP_EOL;
        }
    }

    // 個数を決定する
    public function decideQuantity()
    {
        while (true) {
            echo "個数を入力>";
            User::$quantityOfProduct = (int)fgets(STDIN);
            if (User::$quantityOfProduct >= 1) {
                break;
            }
            echo "1個以上選んでください。";
            echo PHP_EOL;
        }
    }
}

// 商品データ
$productParams1 = [
    ['name' => 'トマト', 'price' => '100'],
    ['name' => 'きゅうり', 'price' => '200'],
    ['name' => '玉ねぎ', 'price' => '300'],
    ['name' => 'なす', 'price' => '400']
];

// $productParams1 の商品を持つ八百屋の開店
$greengrocer1 = new Greengrocer($productParams1);

// 追加商品データ
$addingProductParams1 = [
    ['name' => 'ごぼう', 'price' => '250'],
    ['name' => 'れんこん', 'price' => '350']
];

// 商品を登録（$addingProductParams1 の商品を追加）
$greengrocer1->registerProduct($addingProductParams1);

// お客さんの来店
$user = new User();

// 商品を表示
$greengrocer1->dispProducts();

// 商品を選択
$user->chooseProduct($greengrocer1->products);

// 個数を質問（★引数なしに変更★）
$greengrocer1->askQuantity();

// 個数を決定
$user->decideQuantity();

// 金額金額を計算（★引数なしに変更★）
$greengrocer1->calculateCharges();