<?php
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];
print_r(array_change_key_case(array_combine($codes,$means),0));
?>
