<?php
$ans = array_flip(filter_list());
$keys =[];
$values = array_values(filter_list());
foreach ($values as $v)
{
    array_push($keys,filter_id($v));
}
print_r(array_combine($keys,$values));
?>
