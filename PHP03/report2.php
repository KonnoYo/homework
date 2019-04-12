<?php

//合計値を代入する変数$total

$total = 0;

//1から10000まで足していく

for ($i = 1; $i < 10001; $i++) {
    $total += $i;
}

//合計値を表示する
echo $total,"\n";

?>