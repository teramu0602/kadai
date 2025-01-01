<?php
function pro($arr){
    $result = 1;
    foreach($arr as $ar){
        $result *= $ar; 
    }
    return $result;
}
#数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す
echo pro(array(1, 3, 5, 7, 9));
