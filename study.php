<?php //変数の出力---このファイルはノートとして利用のためプログラムの動作確認はしない

//変数nameを定義して値"yamada"という文字列を格納
$name = "yamada";
//この$nameには"yamada"が入っている
echo $name;

//-----文字列の連結-----------------------------------------
$name = "Tanaka";

//文字列と変数を「.」で繋ぐ
echo "Hello!!".$name;
//そのまま書くとエラーになる
echo "Hello!!"$name;

//----サンプルプログラムをかく-------------------------------
//名前情報を入れる変数
$name = "Hoge";
//年齢情報を入れる変数
$age = 32;
//住所情報を入れる変数
$address = "Osaka";
//電話番号を入れる変数
$tell = "080-1234-5678";

//変数に格納したデータを文字列の連結で表示
echo "【自己紹介】<br>";
echo "私の名前は".$name."です。<br>";
echo "年齢は".$age."です。<br>";
echo "今住んでいるところは".$address."です。<br>";
echo "電話番号は".$tell."です。<br>";
echo "宜しくお願いいたします！"

//--変数の上書き-----------------------------------
//変数$itemを定義し、penを格納する
$item = "pen";
echo $item;
//変数$itemの値をnoteに上書きする
$item = "note";
echo $item;
//item = noteに上書き

//constの場合は上書きが適用されない
const ITEM = "pen";
echo ITEM;
//定数ITEMの値をnoteに上書きする 適用不可
const ITEM = "note";
echo ITEM;
//item = penのまま

?>