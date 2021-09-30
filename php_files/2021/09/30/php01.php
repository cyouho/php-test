<?php
$s = 'abcabcbb';
$arrs = str_split($s);
$n = count($arrs);
$m = count($arrs);

for ($i = 0; $i < $n; $i++) {
	for ($j = 0; $j < $n - $i; $j++) {
		$pos[$j] = $arrs[$i];
		if (in_array($arrs[$i + 1], $pos)) {
			var_dump($i + 1);
		}
	}
}

var_dump($count);