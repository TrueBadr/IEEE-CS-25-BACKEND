<?php
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for($i=0;$i<sizeof($nums)-1;$i++)
{
    if($i==$help_num)
    {
        echo $names[$nums[$i]]."\n".$names[$nums[$i+1]];
        break;
    }
}
?>
