<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
for(++$start;$start<sizeof($mix);$start++)if(gettype($mix[$start])!="string")echo $mix[$start]."\n";
?>
