<?php
 class Ouu{
     public function calFn($n,$m){
         if ($n==0){
             return 0;
         }
         if ($n==1){
             return 1;
         }
         $str = implode(range($n,$m));
         $arr = str_split($str);
         return array_count_values($arr)[1];
     }
 }