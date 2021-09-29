<?php
$a = [
	5
];
$b = 2;

$echo = (string)array_search($b, $a);

var_dump($echo);

// result
// string(0) ""

