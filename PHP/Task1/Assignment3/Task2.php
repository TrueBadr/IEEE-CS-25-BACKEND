<?php
$name = "elzero";
$$name = "Web";
echo "Web\n"; // 1
echo $$name . "\n" ;// 2
echo $elzero . "\n";// 3
echo "${$name}\n"; //4
echo "$elzero\n";//5
?>
