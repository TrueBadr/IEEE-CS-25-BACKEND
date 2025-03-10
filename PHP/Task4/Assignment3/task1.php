<?php
setcookie('site[layout]', 'boxed', time()+1209600, '/', 'localhost');
setcookie('site[font]'  , 'Swat' , time()+1209600, '/', 'localhost');
setcookie('site[color]' , 'blue' , time()+1209600, '/', 'localhost');
echo "<pre>";
print_r($_COOKIE['site']);
echo "</pre>";
?>
