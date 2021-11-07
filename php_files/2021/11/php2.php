<?php
$a = [];
$a = array_pad($a, 7, 0);
var_dump($a);

/*
result:

array(7) {
  [0] =>
  int(0)
  [1] =>
  int(0)
  [2] =>
  int(0)
  [3] =>
  int(0)
  [4] =>
  int(0)
  [5] =>
  int(0)
  [6] =>
  int(0)
}
*/