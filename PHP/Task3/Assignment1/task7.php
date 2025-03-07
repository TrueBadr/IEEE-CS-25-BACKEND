<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$ans = implode($chars);
$s = ["1" => null , "2"=> null];
echo ucfirst(strtolower(strtr($ans,$s)));
?>
