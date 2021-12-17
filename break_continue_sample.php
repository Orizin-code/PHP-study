<?php //条件分岐や繰り返し処理の途中で、処理を中断・継続させる時にはbreakやcontinueを使用する

for($i =1 ; $i < 10 ; $i++){

    if( $i == 5 ){
        echo $i."ここでループから抜ける。";
        break;
    }

    echo $i."<br>";

}

?>

<?php //breakはswitch文、while文でも同様

$i = 1;

switch ($i) {
    case 0:
        echo "iは0に等しい";
        break;
    case 1:
        echo "iは1に等しい";
        break;
    case 2:
        echo "iは2に等しい";
        break;
}

//case0〜2のどこかの条件でtrueになるとbreakによって後続の処理に続く
echo "breakの後に表示される";

?>

<?php //繰り返し処理の中で「ある条件の場合のみ繰り返し処理をスキップ」したいときにはcontinueを使用

//下記のコードでは6のみスキップされる
//continueを使って特定の条件で処理をスキップする
for( $i=0; $i<10; $i++ ) {
  if( $i===6 ){
    echo "iが6なのでループをスキップ<br>";
    continue;
  }
  echo $i ."<br>";
}

?>