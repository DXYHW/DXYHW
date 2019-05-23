<?php
 class Day12{
     public function lis($n){
         $num = $n-1?$n+$this->lis($n-1):1;
         return $num;
     }
 }