<?php
 class Ki{
     public function ReverseSentence($str){

         $arr= explode('',$str);

         $res=array_reverse($arr);

         $data=implode('',$res);

         return $data;

     }
 }