<?php
header("Content-type:text/html;charset=utf-8");

//第二种方法--while循环

function Factorial($n) {

    $i = 1;

    $sum=1;

    while($i<=$n){

        $sum*=$i;

        $i++;

    }

    echo "$n 的阶乘为： " . $sum."<br><br>";

}

 

Factorial(1);

Factorial(2);

Factorial(5);

Factorial(11);

?>