<?php
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];
$Array = [];
for( $i=0 ; $i<3;$i++)$Array[strtolower(($codes[$i]))] = $means[$i];
print_r($Array);
?>
