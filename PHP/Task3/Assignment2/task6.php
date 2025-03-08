<?php
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;
print_r(array_pad($chars,10,substr($char,0,1)));
?>
