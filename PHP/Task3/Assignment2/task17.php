<?php
$nums = [1, 2, 3, 4, 5, 6];
$small = min($nums);
$big   = max($nums);
for($i=0;$i<sizeof($nums);$i++)
{
    $x=rand($small,$big)-1;
    $temp=$nums[$i];
    $nums[$i]=$nums[$x];
    $nums[$x]=$temp;
}
print_r($nums);
?>
