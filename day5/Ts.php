<?php
 class Ts{
     public function day5($arr){
         $arr2 = [];
         $arr3 = [];
         foreach ($arr as $k=>$v){
             if ($v%2==0){
                 $arr2 = [];
             }else{
                 $arr3 = [];
             }
             $arr4 = array_merge($arr2,$arr3);
         }
        return $arr4;
     }
 }