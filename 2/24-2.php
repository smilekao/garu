<?php
//
ini_set('display_errors', true);
error_reporting(E_ALL);
// XXX 確認用
var_dump( ini_get('output_buffering') );

// header出力前に、何かbodyを出力する
echo 'test';
for($i = 0; $i < 4096; $i ++) {
    echo '.';
}

// わかりやすいように少しタイムラグを入れる
sleep(3);

// 別のサイトに移動させる
header('Location: http://www.phpexam.jp/');

