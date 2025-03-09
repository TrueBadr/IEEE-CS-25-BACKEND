<?php
$nums = [10, 100, -20, 50, 30];
$small=10000000000;
foreach ($nums as $n)
{
    if($n<$small)$small=$n;
}
echo $small;
?>
