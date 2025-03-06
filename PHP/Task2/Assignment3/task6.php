<?php

function calculate($a,$b,$c="add")
{
    if($c=="a" || $c=="add")return $a+$b;
    if($c=="s" || $c=="subtract")return $a-$b;
    if($c=="m" || $c=="multiply")return $a*$b;
}

echo calculate(10, 20)."\n"; // 30
echo calculate(10, 20, "a")."\n"; // 30
echo calculate(10, 20, "s")."\n"; // -10
echo calculate(10, 20, "subtract")."\n"; // -10
echo calculate(10, 20, "multiply")."\n"; // 200
echo calculate(10, 20, "m")."\n"; // 200
?>
