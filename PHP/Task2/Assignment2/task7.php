<?php
$mix = [1, 2, "A", "B", "C", 3, 4];
$cnt=0;
foreach ($mix as $i)
{
    if(gettype($i)!="string")
    {
        echo $i."\n";
        $cnt++;
    }
}
echo $cnt." Numbers Printed\n".sizeof($mix)-$cnt." Letters Ignored";
?>
