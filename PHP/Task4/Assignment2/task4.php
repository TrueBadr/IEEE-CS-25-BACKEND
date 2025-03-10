<?php
$date = "1990-10-01";
echo "From 1990-10-01 Till Now Is Approximately " . date_diff(new DateTime("1970-1-1"),new DateTime($date))->days . " Days\n";
echo "From 1990-10-01 Till Now Is Approximately " . date_diff(new DateTime("1970-1-1"),new DateTime($date))->y . " Years\n";
?>
