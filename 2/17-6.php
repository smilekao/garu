<pre>
<?php

function comparison($a, $b) {
  if ( $a == $b ) {
    var_dump($a);
    echo '  equal ';
    var_dump($b);
    echo "\n";
  }
}

//
comparison('a2', 0);
comparison('2a', 2);
comparison('22a', 22);
comparison('022a', 22);
comparison('-22a', -22);
comparison(' 2a', 2);
comparison("\t2a", 2);
comparison("\n2a", 2);
comparison("0x10", 16);  //0x10 は、16進数のこと
comparison("2e2", 200);  //2e2は、2のあとの0が2個つくとのこと
