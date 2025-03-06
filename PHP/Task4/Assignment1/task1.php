<?php

echo round(disk_total_space("C:") / 1024 / 1024 / 1024,2)."\n".round(disk_free_space("C:") / 1024 / 1024 / 1024,2);  ;

?>
