<?php
$help_num = 4;
$nums = [2, 4, 5, 6, 10];
$x=sizeof($nums);
foreach ($nums as $i )
{
    echo $i . " + " . $nums[$help_num] . " = " . $nums[$help_num]+$i."\n";
    --$help_num;
}
?>
