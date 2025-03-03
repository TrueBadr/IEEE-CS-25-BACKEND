<?php
$a = "10";
echo $a . "\n" . (gettype((int)$a))."\n";
echo +$a . "\n" . (gettype(+$a)) ."\n";
echo intval($a)."\n".gettype(intval($a))."\n";
echo $a+0 . "\n" . (gettype($a+0)) ."\n";
echo +$a*1 . "\n" . (gettype($a*1)) ."\n";

?>
