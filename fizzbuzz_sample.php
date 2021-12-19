<?php //FizzBuzz問題
  // 3で割り切れる数はFizz 5で割り切れる数はBuzz 3と5両方で割り切れる数はFizzBuzzと定義

for($i=1 ; $i < 101 ; $i++){

  if($i % 3 == 0 && $i % 5 == 0){  

    echo "FizzBuzz";
    echo "<br>";

  }elseif($i % 3 ==0){

    echo "Fizz";
    echo "<br>";

  }elseif($i % 5 == 0){

    echo "Buzz";
    echo "<br>";

  }else{

    echo $i;
    echo "<br>";
  }

}

?>