<?php
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;
echo substr_count($str,$e,$four)."\n";
echo substr_count($str,strtolower($o),-$four)."\n";
// 1
// 2
?>
