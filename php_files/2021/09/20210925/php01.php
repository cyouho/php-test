<?php
$temp = [
];
$nums = [
	-4,-1,0,3,10
];

foreach($nums as $key => $value) {
	$temp[$key] = $value * $value;
}
var_dump(sort($temp));

