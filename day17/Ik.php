<?php
  include 'Ko.php';
  $tt = new Ko();
  $data =$tt->Combine($arr_A=[1,3,6,9],$arr_B=[2,4,5,8,20]);
  print_r($data);