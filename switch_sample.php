<?php //----switch------------------------

//if文との違い
//ifは~以上、~以下と行った判定ができる
//switchは1つの比較対象に対して複数の条件分岐を行う際に用いられる


$fruits = "apple";

//比較対象をcaseの後に記述
switch($fruits) {
//比較対象と比較する値を記述
    case "banana":
        echo "バナナです";
        break;
    case "apple":
        echo "りんごです";
        break;
    case "orange":
        echo "オレンジです";
        break;
    case "mango":
        echo "マンゴーです";
        break;
    default:
        echo "不正な名前です";
}

?>

<?php //switchを使った複数の条件の条件分岐------------------
//caseを利用するがifを使った方がコード量がスッキリする

$month = 6;

//比較対象をcaseの後に記述
switch($month) {
//比較対象と比較する値を記述
    case 3:
    case 4:
    case 5:
        echo "春です";
        break;
    case 6:
    case 7:
    case 8:
        echo "夏です";
        break;
    case 9:
    case 10:
    case 11:
        echo "春です";
        break;
    case 12:
    case 1:
    case 2:
        echo "春です";
        break;
    default:
        echo "不正な値です";
}

?>