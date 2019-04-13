<?php

// strip_tags()関数を使ってみる

$test = "テスト<br><p>テスト</p><strong>テスト</strong>";

echo strip_tags($test),"\n";
echo strip_tags($test,"<br><strong>"),"\n";


// array_push()関数を使ってみる

$test2 = array("one","two");

array_push($test2, "three", "four");

print_r($test2);
echo "\n";

// array_merge()関数を使ってみる

$test3_1 = [1,2,3];
$test3_2 = [4,5,6];

print_r(array_merge($test3_1, $test3_2));
echo "\n";


// time(),mktime()関数を使ってみる

echo time(),"\n";

echo mktime(12,0,0,4,1,2019),"\n";


// date()関数を使ってみる

date_default_timezone_set('Asia/Tokyo');

echo date("Y/m/d H:i:s"),"\n";

echo date("y/n/t"),"\n";


?>
