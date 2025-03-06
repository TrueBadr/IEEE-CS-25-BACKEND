<?php

function get_arguments1(...$all1)
{
    $all1 = func_get_args();
    echo implode(" ",$all1)."\n";
}

function get_arguments2(...$all2)
{
    $all2 = func_get_args();
    foreach ($all2 as $a)
    {
        echo $a." ";
    }
    echo "\n";
}

echo get_arguments1("Hello", "Elzero", "Web", "School");
echo get_arguments2("I", "Love", "PHP");

?>
