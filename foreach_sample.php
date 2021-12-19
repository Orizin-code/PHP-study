<?php

// 配列 複数のデータを格納できる
$users = ["satou", "tanaka", "yamada", "shimizu"];

// 配列に対してforeach文で中身を表示
// $usersの要素１つ１つを$userに代入してブロック内の処理を実行
foreach($users as $user){
  echo "Hello!!".$user;
}

?>

<?php

$ages = [20, 60, 27, 23];

foreach($ages as $age) {
  echo "I'm ".$age. "years old.";
}


$items = ["book", "food", "movie", "music"];

foreach($items as $item) {
  echo "I bought ".$item;
}


$prefectures = ["Hokkaido", "Okinawa", "Saitama", "Ibaraki"];

foreach($prefectures as $prefecture) {
  echo $prefecture." is awesome!!";
}

?>

<?php //foreach(連想配列 as $key => $value)

$users = [
    1 => "satou",
    2 => "tanaka",
    3 => "yamada",
    4 => "shimizu"];

# インデックス番号と配列の要素を同時に出力
foreach($users as $key => $value){
  echo "No.".$key."は".$value."です";
}

?>

<?php

$fruitesPrices = [
    'apple' => 150,
    'banana' => 100,
    'orange' => 200,
    'peach' => 300
];

foreach($fruitesPrices as $frute => $price){
    echo $fruite."の値段：".$price."円";
}

?>

<?php //FizzBuzz問題の応用
//3の倍数でFizzを出力
//5の倍数でBuzzを出力
//15の倍数でFizzBuzzを出力
//4の倍数は出力しない（ただし、3でも割り切れる場合はFizz、5でも割り切れる場合はBuzzと出力）
//それ以外は数字をそのまま出力する

foreach(range(1, 30) as $num) {
    if($num % 15 == 0) {
        echo 'FizzBuzz'. PHP_EOL;
    }elseif($num % 3 == 0 ){
        echo 'Fizz'. PHP_EOL;
    }elseif($num % 5 == 0 ){
        echo 'Buzz'. PHP_EOL;
    }elseif($num % 4 == 0 ){
        continue;
    }else{
        echo $num. PHP_EOL;
    }
}

?>