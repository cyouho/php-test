<?php
$test = '123' .
        'abc';

$char = 'def' .
	$test;

var_dump($char);

// result
// string(9) "def123abc"
