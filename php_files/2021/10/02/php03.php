<?php
$s1 = "abcdxabcde";
$s2 = "abcdeabcdx";
$start = 0;

$arrayS1Length = count($s1);
$arrayS2Length = count($s2);

if ($arrayS1Length > $arrayS2Length) return false;

$endLength = $arrayS2Length - $arrayS1Length;

$arrayS1 = count_chars($s1, 1);

while ($start <= $endLength) {
	$subStr = substr($s2, $start, $arrayS1Length);
	$subArr = count_chars($subStr, 1);

	if ($arrayS1 == $subArr) return true;

	$start++;
}

return false;