<?php
setcookie("site[layout]", 'boxed');
setcookie("site[font]", 'Swat');
setcookie("site[color]", 'blue');
echo "<pre>";
print_r($_COOKIE['site']);
echo "</pre>";
echo "Your Color Is ".$_COOKIE['site']['color']." And Your Font Is ".$_COOKIE['site']['font'];
?>
