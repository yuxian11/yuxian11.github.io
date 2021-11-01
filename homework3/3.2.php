<?php
$aray = array(15,24,30,25,80,11,12,45,22,10);
 for($i=0;$i<count($aray);$i++){
      for($j=$i+1;$j<count($aray);$j++){
          $a=$aray[$i];
          $b=$aray[$j];
          if($a>$b){
            $aray[$i]=$b;
            $aray[$j]=$a;
          }

      }
 }
 //输出排序好的
  for($k=0;$k<count($aray);$k++){
    echo $aray[$k].',';

  }
