<pre>
<?php

/*
「縦線|」は所謂orで、「いずれか」という意味になります。
括弧を使って一括りすると良いですが、無くても動きます。
*/

//
$string = '0123456789abcdefghijk';
$ret = preg_match('/(abc)|(456)|(ABC)/', $string, $matches);
var_dump($ret);
var_dump($matches);
