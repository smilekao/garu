<pre>
<?php

$i = 100;

//EODはなんでもいい。ヒアドキュメントは、"" で文字を書いたのと同じ
$string = <<<EOD
ヒアドキュメント用の文字列です。
\tや\n、{$i}なども書いてみましょう。
EOD;
var_dump($string);

//EODはなんでもいい。''で囲うだけ　、'' で文字を書いたのと同じ
$string = <<<'EOD'
ヒアドキュメント(NowDoc)用の文字列です。
\tや\n、{$i}なども書いてみましょう。
EOD;
var_dump($string);


