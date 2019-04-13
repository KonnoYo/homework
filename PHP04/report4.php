<?php

// 配列の中で一番大きい値を返す関数max_array
function max_array($arr){
    
    // 配列の最初の要素を一番大きい値と仮定
    $max_number = $arr[0];
    
    foreach($arr as $a){
        
        /* 今までの一番大きい値と現在の値を比較し
           大ききればその値に更新                 */
        
        if ($max_number < $a) {
        
        $max_number = $a;
        
        }
    }
    
    return $max_number;
    
}

// 関数の実行（確認用）
    echo max_array([8,8,9,0,32,10,4,12,5]),"\n";
 
 ?>