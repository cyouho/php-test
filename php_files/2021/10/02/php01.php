<?php
$s1 = "ab";
$s2 = "eidbaooo";
$len = strlen($s2);
$arrs = str_split($s2);
$arrs1 = str_split($s1);
$n = $strlen = strlen($s1);


foreach ($arrs as &$value) {
	$value = ord($value);
}
unset($value);

foreach ($arrs1 as &$value) {
	$value = ord($value);
}
unset($value);
$sum = array_sum($arrs1);
var_dump($sum);


// for ($i = 0, $j = $strlen - 1; $j < $len; $i++, $j++) {
// 	$arr[$i] = substr($s2, $i, $strlen);
// }
// var_dump($arr);

for ($i = 0, $j = $strlen - 1; $j < $len; $i++, $j++) {
	$arr[$i] = array_sum(array_slice($arrs, $i, $strlen));
}

var_dump($arr);

var_dump(in_array($sum, $arr));


