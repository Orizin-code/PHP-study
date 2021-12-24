<?php

// 関数を定義する部分---------------

// 商品を表示
function dispProducts($products) { 
    echo "いらっしゃいませ！商品を選んでください。";
    echo PHP_EOL;

    foreach ($products as $key => $product) {
        echo $key + 1 . "." . $product['name'] . "（" . $product['price'] . "円）";
        echo PHP_EOL;
    }
}

// 商品を選択
function chooseProduct($products) {
    while (true) {
        echo "商品の番号を選択>";
        $selectProductNum = (int)fgets(STDIN);
        if ($selectProductNum >= 1 && $selectProductNum <= 4) {
          break;
        }
        echo "1~4の番号を入力してください。";
        echo PHP_EOL;
    }
    return $products[$selectProductNum - 1];
}

// 商品の個数を決定
function decideQuantity($chosenProduct) {
    echo $chosenProduct['name'] . "ですね。何個買いますか？";
    echo PHP_EOL;
    while (true) {
        echo "個数を入力>";
        $quantityOfProduct = (int)fgets(STDIN);
        if ($quantityOfProduct >= 1) {
            break;
        }
    echo "1個以上選んでください。";
    echo PHP_EOL;
    }
    return $quantityOfProduct;
}

// 合計金額を計算
function calculateCharges($chosenProduct, $quantityOfProduct) {
    $totalPrice = $chosenProduct['price'] * $quantityOfProduct;
    if ($quantityOfProduct >= 5) {
        echo "5個以上なので10％割引となります！";
        echo PHP_EOL;
        $totalPrice *= 0.9;
    }
    echo "合計金額は" . floor($totalPrice) . "円です。";
    echo PHP_EOL;
    echo "お買い上げありがとうございました！";
    echo PHP_EOL;
}

// 関数を呼び出す部分---------------

// 商品データ
$products = [
    ['name' => 'トマト', 'price' => '100'],
    ['name' => 'きゅうり', 'price' => '200'],
    ['name' => '玉ねぎ', 'price' => '300'],
    ['name' => 'なす', 'price' => '400']
];

dispProducts($products); //  商品を表示
$chosenProduct = chooseProduct($products); // 商品を選択
$quantityOfProduct = decideQuantity($chosenProduct); // 商品の個数を決定
calculateCharges($chosenProduct, $quantityOfProduct); // 合計金額を計算 