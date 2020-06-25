<pre>
<?php


// 足し算
$i = PHP_INT_MAX + 1;
var_dump($i);
$r = bcadd(PHP_INT_MAX, '1', 0);
var_dump($r);

// 引き算
$i = (PHP_INT_MAX * -1) - 2;
var_dump($i);
$r = bcsub((string)(PHP_INT_MAX * -1), '2', 0);
var_dump($r);


