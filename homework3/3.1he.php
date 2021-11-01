<?php
//求和问题，给定一个数计算从1加到这个数的和！
$num=100;
function sum($n){
    if($n>1){
        $s=sum($n-1)+$n;//调用自身，sum（100）=sum（99）+100;以此类推往下递归！
    }else{
        $s=1;
    }
    return $s;
}
echo '加到这个数的和是:'.sum($num);