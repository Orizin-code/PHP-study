<?php

//echoは文字列や数字等を出力する命令
echo "Hello World!<br>"; 

?>

<?php

//printは文字列や数字等を出力する命令 printの場合は()をつける
print("Hello World!<br>");

?>

<?php

//文字列を改行させる方法
print("Hello World!\n"); //ブラウザでは改行されない nl2br()を使えばブラウザでも改行可能
print("Hello World!<br>");
print("Hello World". PHP_EOL); //ブラウザでは改行されない  実行環境のOSに対応する改行コードを出力する定数

?>