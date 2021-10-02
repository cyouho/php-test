<?php
$s1 = "abcdxabcde";
$s2 = "abcdeabcdx";
$len1 = strlen($s1);
$len = strlen($s2);
$arrs = str_split($s2);
$arrs1 = str_split($s1);
$n = $strlen = strlen($s1);

for ($i = 0, $j = $strlen - 1; $j < $len; $i++, $j++) {
	$arr[$i] = array_count_values(str_split(substr($s2, $i, $strlen)));
	ksort($arr[$i]);
}

var_dump($arr);

$resultArray1 = array_count_values($arrs1);
ksort($resultArray1);
var_dump($resultArray1);

foreach ($arr as $value) {
	if ($resultArray1 === $value) {
		var_dump(true);
		return true;
	}
}

var_dump(false);
return false;