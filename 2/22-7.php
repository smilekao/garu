<pre>
<?php

/*
[^foo]bar という正規表現は、「fooではない文字列に続いてbarという文字列が続くもの」ではありません。
[^foo]bar という正規表現は、「fでもoでもoでもない1文字(なのでoが重複している分はただの無駄)」「に続く」
*/

//
$string = 'abcfoobarhogebar';
$ret = preg_match('/[^foo]bar/', $string, $matches);
var_dump($ret);
var_dump($matches);
