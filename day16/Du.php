<?php
 class Du{
     public function Find($target, $array){
         if ($array[0][0]>$target){
             return false;
         }
         for ($i=0;$i<count($array);$i++){
             for ($j=0;$j<count($array);$j++){
                 if (in_array($array[$i][$j]>$target)){
                     return true;
                 }
             }
         }
     }
 }