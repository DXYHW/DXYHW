<?php
  include 'Ki.php';
  $res = new Ki();
  $data = $res->ReverseSentence('student. a am I');
  print_r($data);