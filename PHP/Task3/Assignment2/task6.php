<?php
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;
print_r(array_values(array_pad($chars,sizeof($chars)+sizeof($chars),$char[$zero])));
?>
