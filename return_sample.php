<?php
// 関係の定義
function calc0($num1, $num2) {
    $total = $num1 + $num2;
    return $total;
}

?>

<?php
// 関係の定義
function calc($num1, $num2) {
    $total = $num1 + $num2;

    if ($total > 9) {
      return "合格"; 
    }

    return "不合格";
}

// 関数の呼び出し
$result_A = calc(4, 8);
$result_B = calc(3, 2);

echo "Aの結果：" . $result_A;
echo "Bの結果：" . $result_B;

?>


<?php
// 関係の定義
function calc1($num1, $num2) {
    $total = $num1 + $num2;
    return $total;
}

$total_A = calc1(4, 8);
$total_B = calc1(2, 5);

echo "Aの値は" . $total_A . "です。";
echo "Bの値は" . $total_B . "です。";

?>