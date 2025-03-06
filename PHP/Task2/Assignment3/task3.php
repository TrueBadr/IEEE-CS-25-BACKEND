<?php

function sum_all(...$nums)
{
    $nums=func_get_args();
    $cnt=0;
    foreach ($nums as $n )
    {
        if($n!=5)
        {
            if($n==10)$cnt+=20;
            else $cnt+=$n;
        }
    }
    return $cnt;
}

echo sum_all(10, 12, 5, 6, 6, 10)."\n"; // 64
echo sum_all(5, 10, 5, 10); // 40
?>
