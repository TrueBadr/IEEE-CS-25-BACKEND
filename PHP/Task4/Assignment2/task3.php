<?php
date_default_timezone_set('Africa/Cairo');
$date="1990-10-01";
$date1=strtotime($date);
$date2=time();
$days=($date1-$date2)/(86400);
$years=$days/365.25;
echo "From Epoch Time Till $date Is Approximately " . round(abs($days) , 1) . " Days\n";
echo "From Epoch Time Till $date Is Approximately " . round(abs($years), 1) . " Years\n";
?>
