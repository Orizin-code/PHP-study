<?php //---キャラクターのパラメーター------------------

//勇者のhp
$brave_hp = 30;
//勇者の攻撃力
$brave_attack = 20;
//勇者の防御力
$brave_defense = 5;

//敵のhp
$enemy_hp = 30;
//敵の攻撃力
$enemy_attack = 10;
//敵の防御力
$enemy_defense = 10;

//-------キャラクターが攻撃時の処理------------------------
$select_attack = mt_rand(0,3);
if($select_attack == 0){
  echo "かいしんのいちげき";
  $enemy_damage = $brave_attack - $enemy_defense + mt_rand(10,20);
  $enemy_hp = $enemy_hp - $enemy_damage;
}else{
  echo "つうじょうこうげき";
  //敵に与えるダメージの計算  範囲オブジェクト 3,5
  $enemy_damage = $brave_attack - $enemy_defense + mt_rand(3,5);
  //敵のHPにダメージを与える
  $enemy_hp = $enemy_hp - $enemy_damage;
}

//敵に与えるダメージと残りHPの表示
echo "敵に".$enemy_damage."のダメージを与えた。";
echo "<br>";
echo "残りHPは".$enemy_hp."だ。";
echo "<br>";

//残りHPによってリアクションを変える
if($enemy_hp > 20){
  echo "敵は元気だ";
}elseif($enemy_hp > 10){
  echo "敵はちょっと弱っている";
}elseif($enemy_hp > 5){
  echo "敵はかなり弱っている";
}elseif($enemy_hp > 0){
  echo "敵は瀕死だ";
}else{
  echo "敵はしんだ";
}

echo "<br>";

//--------敵がキャラクターに攻撃時の処理--------------------
$select_attack = mt_rand(0,3);
if($select_attack == 0){
  echo "かいしんのいちげき";
  $brave_damage = $enemy_attack - $brave_defense + mt_rand(10,20);
  $brave_hp = $brave_hp - $brave_damage;
}else{
  echo "つうじょうこうげき";
  //敵から受けたダメージの計算 範囲オブジェクト 3,5
  $brave_damage = $enemy_attack - $brave_defense + mt_rand(3,5);
  //敵からHPにダメージを受ける
  $brave_hp = $brave_hp - $brave_damage;
}

//キャラクターが受けるダメージと残りHPの表示
echo "敵から".$brave_damage."のダメージを受けた。";
echo "<br>";
echo "残りHPは".$brave_hp."だ。";
echo "<br>";

//残りHPによってリアクションを変える
if($brave_hp > 20){
  echo "勇者は元気だ";
}elseif($brave_hp > 10){
  echo "勇者はちょっと弱っている";
}elseif($brave_hp > 5){
  echo "勇者はかなり弱っている";
}elseif($brave_hp > 0){
  echo "勇者は瀕死だ";
}else{
  echo "勇者は死んだ";
}

?>