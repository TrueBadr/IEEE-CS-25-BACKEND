<?php
$index=0;
while($index<=20)
{
    if($index)echo $index."\n";
    $index+=2;
}
?>

<?php
$index=0;
do
{
    if($index)echo $index."\n";
    $index+=2;
}while($index<=20)

?>


<?php
$index=0;
for(;$index<=20;$index+=2)if($index)echo $index."\n";
?>

