<pre>
<?php

$i = PHP_INT_MAX; //そのマシンで扱える整数の最大値が出る
var_dump($i); //型はint
$i ++;
var_dump($i); // 型がfloatになる つまり近似値になる
echo "\n";
//
$i = PHP_INT_MAX * -1;
var_dump($i);//型はint
$i --;
var_dump($i);//型はint
$i --;
var_dump($i);  // 型がfloatになる　 つまり近似値になる
