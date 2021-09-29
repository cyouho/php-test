<?php
$nums = [0, 1, 0, 3, 7];
$length = count($nums);

foreach($nums as $key => $value) {
	if ($value === 0) {
		unset($nums[$key]);
	}
}

$new_length = count($nums);

if ($length != $new_length) {
	$arr = [];
	$arr = array_pad($arr, $length - $new_length, 0);
	$nums = array_merge($nums, $arr);
}

var_dump($nums);

/*
结果:
array(5) {
  [0]=>
  int(1)
  [1]=>
  int(3)
  [2]=>
  int(7)
  [3]=>
  int(0)
  [4]=>
  int(0)
}
*/