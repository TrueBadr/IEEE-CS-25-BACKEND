<?php
setcookie('site[layout]', '', time() - 3600, '/', 'localhost');
print_r($_COOKIE);
?>
