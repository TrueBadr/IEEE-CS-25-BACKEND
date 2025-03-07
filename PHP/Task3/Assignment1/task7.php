<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
if(gettype($chars[0]=="string"))echo strtoupper($chars[0]);
for($i=1;$i<sizeof($chars);$i++)
{
    if(gettype($chars[$i])=='string')echo strtolower($chars[$i]);
}
?>
