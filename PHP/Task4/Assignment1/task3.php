<?php
$dir1="Programming";
$dir2="Programming/PHP";
if (!file_exists($dir1))
{
    mkdir($dir1, 0750).mkdir($dir2, 0750);
}
chmod($dir1, 0750);
chmod($dir2, 0750);
if (file_exists($dir2))
{
    rmdir($dir2);
    echo "Directory $dir2 Removed\n";
}
if (file_exists($dir1)) 
{
    rmdir($dir1);
    echo "Directory $dir1 Removed\n";
}

?>
