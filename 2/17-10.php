<pre>
<?php
//
$s = 'hoge';
$i = 100;

//
$v1 = 'abc';
$v2 = "abc";
var_dump($v1);
var_dump($v2);

//
$v1 = 'data is {$s}';  //{}がそのまま出てくる
$v2 = "data is {$s}";  //{}が展開されて出てくる　　{}はなくても動くがあったほうがいい
var_dump($v1);
var_dump($v2);

//
$v1 = 'data is {$i}';
$v2 = "data is {$i}";
var_dump($v1);
var_dump($v2);

//
$v1 = 'print " and \' ';  //シングルコートの中で、ダブルコートを使いたいときは　バックスラッシュを使う
$v2 = "print \" and ' ";  //上記の反対
var_dump($v1);
var_dump($v2);

//
$v1 = 'escape \n';
$v2 = "escape \n";
var_dump($v1);
var_dump($v2);

