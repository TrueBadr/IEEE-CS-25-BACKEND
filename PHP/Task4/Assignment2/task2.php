<?php
date_default_timezone_set('Africa/Cairo');
$date="2005-10-02";
$dateTime=new DateTime($date);
$dateTime->modify('+15 hours +15 minutes +15 seconds');
echo date_default_timezone_get() . "\n" . $dateTime->format('Y, F, l \'dS\' H:i:s') . "\n";
?>
