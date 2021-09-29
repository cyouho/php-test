<?php
$s = "Let's take LeetCode contest";

 $temp = explode(' ', $s);
        foreach ($temp as &$value) {
            $value = array_reverse($value);
        }
        unset($value);
        $s = implode(' ', $temp);

var_dump($s);