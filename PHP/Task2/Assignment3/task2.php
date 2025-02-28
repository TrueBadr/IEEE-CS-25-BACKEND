<?php
function get_arguments()
{
    $all_args = func_get_args();
    return implode(" ", $all_args);
}
echo get_arguments("Hello", "Elzero", "Web", "School")."\n";
echo get_arguments("I", "Love", "PHP") . "\n";
?>
