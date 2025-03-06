<?php
$greet1 = function ($i1){echo "Hello $i1\n";};
$greet2 = fn($i) => "Hello $i\n";
$greet1("badr");
echo $greet2("badr");
?>
