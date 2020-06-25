<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL);

// ���݂��Ȃ��t�@�C����open���悤�Ƃ��Ă���　
//存在しないファイルをOPENしようとしている　上のコメントは元の文書だがなぜか化けている
$fp = fopen('dummy', 'r');
