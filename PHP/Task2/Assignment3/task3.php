<?php
function sum_all(...$numbers)
{
    $sum = 0;
    foreach ($numbers as $number)
    {
            if ($number == 5 ) continue;
        elseif ($number == 10) $number = 20;
        $sum += $number;
    }
    return $sum;
}
echo sum_all(10, 12, 5, 6, 6, 10) . "\n";
echo sum_all(5, 10, 5, 10) . "\n";
?>
