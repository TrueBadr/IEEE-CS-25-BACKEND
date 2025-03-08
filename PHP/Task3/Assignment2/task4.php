<?php
$nums = [10, 20, 30];
function sum($i,$s){return $s+$i;}
echo array_sum($nums)."\n";
echo array_reduce($nums,function($i1,$s1){return $i1+$s1;});
?>
