<?php

//echoは文字列や数字等を出力する命令
echo "Hello World!";
//printは文字列や数字等を出力する命令 printの場合は()をつける
print("Hello World!");

?>

<?php

//文字列を改行させる方法
print("Hello World!\n"); //ブラウザでは改行されない nl2br()を使えばブラウザでも改行可能
print("Hello World!<br>");
print("Hello World". PHP_EOL); //ブラウザでは改行されない  実行環境のOSに対応する改行コードを出力する定数

?>

<?php //定義と代入

$name = "tanaka";
$item = "pen";
$price = 200;

//constが定数の意味  定数は値が変わらないものを定義する
//NAMEが定数の名前
//"yamada"が定数に格納される値
const NAME = "yamada";
//define()を使っても関数を定義できる
define("NAME" , "yamada");

//円周率は変わることがないため定数で定義する
const PI = 3.14;
//半径は変わる可能性があるため変数で定義する
$radius = 10;
echo $radius * $radius * PI;

?>