<?php
$str = 'aAa';
$num = 3;
$char = "_";
echo str_repeat(strtolower(chunk_split($str,4,$char)),$num);
?>
