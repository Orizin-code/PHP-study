<?php //--------条件分岐----------------------

$hp = 10;

//ifで条件を設定する
if($hp >= 10) {
  echo "勇者のHPは10以上だ";
}

?>

<?php

$a = 10;
$b = 15;

//var_dumpはデータの型(Boolean型（trueかfalse）等)として出力される。デバッグ時に利用されることが多い。
echo "aはb以上？：";
var_dump($a >= $b);
echo "\n";
echo"aはb以下？：";
var_dump($a <= $b);
echo "\n";
echo "aはbより大きい？：";
var_dump($a > $b);
echo "\n";
echo "aはbより小さい？：";
var_dump($a < $b);
echo "\n";
echo "aはbと同じ？：";
var_dump($a == $b);
echo "\n";

?>

<?php //-----------else-----------------

$hp = 5;

if($hp >= 10){
  echo "勇者のHPは10以上だ";
}else{
  //ifの条件が成り立たない場合の処理
  echo "勇者のHPは10より下だ";
}

?>

<?php //----------elseif-------------

$hp = 3;

if($hp > 10){
  echo "勇者は元気だ";
//複数の条件を指定するときに使う
}elseif($hp > 5){
  echo "勇者は弱っている";
}elseif($hp > 3){
  echo "勇者はかなり弱っている";
}elseif($hp > 0){
  echo "勇者は瀕死だ";
}else{
  echo "勇者は力尽きてしまった";
}

?>

<?php

//省略形
if($hp >= 10) echo "勇者のHPは10以上だ";

?>

<?php

$hp = 11;

//条件式(true or false) ? trueの時に行いたい処理 : falseの時に行いたい処理
echo ($hp > 10) ? "勇者のHPは10より大きいです" : "勇者のHPは10より小さいです";

?>