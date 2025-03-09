<?php
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
$ans = [];
print_r(array_merge($ans,array_filter($mix,function ($i){if(is_int($i)&&$i%2==1)return $i;})));
?>
