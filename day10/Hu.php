<?php
   function FindNumsAppearOnce($array){
       $arr = array_count_values($array);
       foreach ($arr as $k=>$v){
           if ($v == 1){
               $arrr[] = $k;
           }
       }
       return $arrr;
   }
   print_r(FindNumsAppearOnce([2,4,3,6,3,2,5,5]));