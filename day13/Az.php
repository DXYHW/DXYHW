<?php
 class Az{
     public function Add($num1,$num2){
         if ($num2 == 0){
             return $num1;
         }
         $sum = $num1 ^ $num2;
         $arr = ($num1 & $num2);
         return $this->Add($sum,$arr);
     }
 }