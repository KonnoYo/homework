<?php

/* $arrという配列の仮引数を持ち、
   数値が入った配列を渡すとその要素を
   すべてかけた結果を返す関数multiple_array */
function multiple_array($arr){
    
    // 結果用の変数$resultに初期値として1を代入
    $result = 1;

    //配列の要素を一つずつすべてかけていく
    for ($i = 0; $i < count($arr);$i++) {

    $result *= $arr[$i];

    }

    // 結果を返す
    return $result;

}

// 関数を実行（確認用）
    echo multiple_array([1, 3, 5 ,7, 9]),"\n";

?>