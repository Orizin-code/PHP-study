<?php //substr(文字列, 開始位置, 文字列の長さ);

$string = "ABCDEFGHIJ";
$result = substr($string, 5, 3);
echo $result

?>

<?php
//function 関数名(引数) {
//  処理;
//}

// 関数の定義
function printHello() {
    echo "Hello World!";
}
// 関数の呼び出し   
printHello();

?>

<?php
// 関数の定義    
function printName($name) {
    echo "私の名前は" . $name . "です。";
}
// 関数の呼び出し
printName('佐藤');

?>

<?php //複数の呼び出し

// 関数の定義  
function printName2($name) {
    echo "私の名前は" . $name . "です。";
}
// 関数の呼び出し    
printName2('佐藤');
printName2('田中');
printName2('高橋');

?>

<?php
// 関数の定義    
function printName3($last_name, $first_name, $age) {
    echo "私の名前は" . $last_name . $first_name . "です。" . $age . "才です。";
}
// 関数の呼び出し
printName3('佐藤', '一郎', 27);

?>