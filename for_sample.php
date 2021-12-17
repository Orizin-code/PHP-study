<? php //---for書式----------------

for (初期化処理; 条件; 更新処理) {
    繰り返す処理
}

?>

<?php

for ($i=1; $i<100; $i++) {

    echo $i;
    echo "<br>";

}

?>

<?php for($i = 0; $i < 100; $i++) : ?>

<?php echo $i; ?>

<?php endfor; ?>


<? php //---while書式-----------

while (繰り返す条件) {

    繰り返したい処理

}

?>

<?php

$i = 1;

while ($i < 100) {

    echo $i;
    echo "<br>";
    $i++;
}

?>

<?php 

$i = 0;

?>

<?php while($i < 100): ?>

<?php

echo $i;
$i++;

?>

<?php endwhile; ?>