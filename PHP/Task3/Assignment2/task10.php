<?php
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];
array_splice($mix,sizeof($nums),sizeof($nums),$nums);
print_r($mix);
?>
