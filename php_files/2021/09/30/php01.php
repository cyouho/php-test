<?php
$s = 'bbb';
$arrs = str_split($s);
$n = count($arrs);

$max = 0;

for ($i = 0; $i < $n; $i++) {
	for ($j = 0, $k = $i; $j < $n - $i; $j++, $k++) {
		$pos[$j] = $arrs[$k];
		if (in_array($arrs[$k + 1], $pos)) {
			break;
		}
	}
	$temp = count($pos);
	if ($max < $temp) {
		$max = $temp;
	}
	//var_dump($temp);
	//var_dump($pos);
	unset($pos);
}

var_dump($max);
//var_dump($count);