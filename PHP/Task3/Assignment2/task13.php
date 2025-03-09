<?php
$nums = [10, 100, -20, 50, 30];
$big=0;
foreach ($nums as $n)
{
 if($n >= $big)$big=$n;
}
echo $big;
?>
