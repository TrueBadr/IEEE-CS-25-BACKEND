// 1
<?php
$chars = ["A", "B", "C"];
$chars[]="D";
print_r($chars);
?>
// 2
<?php
$chars = ["A", "B", "C"];
array_push($chars,"D");
print_r($chars);
'<br>';
?>
// 3
<?php
$chars = ["A", "B", "C"];
print_r(array_replace($chars,[3=>"D"]));
'<br>';
?>
// 4
<?php
$chars = ["A", "B", "C"];
print_r(array_merge($chars,["D"]));
'<br>';
?>
