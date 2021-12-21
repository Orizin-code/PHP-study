<?php

// 商品データ
$products = [
    ['name' => 'トマト', 'price' => '100'], //インデックス ０
    ['name' => 'きゅうり', 'price' => '200'], //インデックス １
    ['name' => '玉ねぎ', 'price' => '300'], //インデックス ２
    ['name' => 'なす', 'price' => '400'] //インデックス ３
];

// 商品を表示
echo "いらっしゃいませ！商品を選んでください。";
echo PHP_EOL;
echo PHP_EOL;
foreach ($products as $key => $product) {
    echo $key + 1 .'.'.$product['name'].'（'.$product['price'].'円）';
    echo PHP_EOL;
};

// 商品を選択
while (true) {
  echo "商品の番号を選択 >";
  $selectProductNum = (int)fgets(STDIN);
  if ($selectProductNum >= 1 && $selectProductNum <= 4){
      break;
  }
  echo "1~4の番号を入力してください。";
  echo PHP_EOL;
}
$chosenProduct = $products[$selectProductNum - 1];

// 個数を決定
  echo $chosenProduct['name'] . "ですね。何個買いますか？";
  echo PHP_EOL;
while (true) {
  echo "個数を入力>";
  $quantityOfProduct = (int)fgets(STDIN);
  if ($quantityOfProduct >= 1) {
      break;
  }
  echo "1個以上を入力してください。";
  echo PHP_EOL;
}

// 合計金額を計算
   // 合計   =       商品単価         +          個数
$totalPrice = $chosenProduct['price'] * $quantityOfProduct;

if ($quantityOfProduct >= 5){
    echo "5個以上なので10％割引となります！";
    echo PHP_EOL;
    $totalPrice *= 0.9;
}                  // floorは小数点を消す
echo "合計金額は" . floor($totalPrice) . "円です。";
echo PHP_EOL;
echo "お買い上げありがとうございました！";