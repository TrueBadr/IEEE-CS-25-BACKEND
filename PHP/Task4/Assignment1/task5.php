<?php
echo pathinfo("index.php",PATHINFO_FILENAME).".".pathinfo("index.php",PATHINFO_EXTENSION)."\n";
echo basename(__FILE__) . "\n";
?>
