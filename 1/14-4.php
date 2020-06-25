<?php

// DBに接続
$user = 'root';
$pass = 'root';
$dsn = 'mysql:dbname=test;host=localhost;charset=utf8mb4';
//
try {
    $dbh = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "connect error!! (" , $e->getMessage() , ")";
    return ;
}
// 静的プレースホルダを指定
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//
//var_dump($dbh);


// 「準備されたSQL文」を用意
$sql = 'SELECT * FROM test_users;';
$pre = $dbh->prepare($sql);

// 値を紐づける
// XXX 今回は紐づける値はなし

// SQL文を発行する
$r = $pre->execute();
if (false === $r) {
    // エラーが発生したので表示(本番では出さないこと!!)
    var_dump($pre->errorInfo());
}

// データを取得する
while($row = $pre->fetch(PDO::FETCH_ASSOC)) {
    // 一端、ざっくりと表示
    var_dump($row);
}


