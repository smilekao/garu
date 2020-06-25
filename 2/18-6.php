<pre>
<?php

$awk = array(
  'c' => 2,
  'd' => 4,
  'a' => 1,
  'b' => 3,
);
sort($awk); //値だけをそーとする　keyは振り直しになる
echo "sort\n";
var_dump($awk);

//
$awk = array(
  'c' => 2,
  'd' => 4,
  'a' => 1,
  'b' => 3,
);
rsort($awk); //上の反対
echo "\nrsort\n";
var_dump($awk);

//
$awk = array(
  'c' => 2,
  'd' => 4,
  'a' => 1,
  'b' => 3,
);
asort($awk);  //値だけをそーとする　keyも保持される
echo "\nasort\n";
var_dump($awk);

//
$awk = array(
  'c' => 2,
  'd' => 4,
  'a' => 1,
  'b' => 3,
);
arsort($awk);  //上の反対
echo "\narsort\n";
var_dump($awk);

//
$awk = array(
  'c' => 2,
  'd' => 4,
  'a' => 1,
  'b' => 3,
);
ksort($awk);//keyでソートされる
echo "\nksort\n";
var_dump($awk);

//
$awk = array(
  'c' => 2,
  'd' => 4,
  'a' => 1,
  'b' => 3,
);
krsort($awk); //上の反対
echo "\nkrsort\n";
var_dump($awk);

