<?php

function greeting($name , $gender="")
{
   if($gender=="Male")echo "Hello Mr $name\n";
   elseif($gender=="Female")echo "Hello Miss $name\n";
   elseif($gender==NULL)echo "Hello $name\n";
}
echo greeting("Mahmoud", "Male");
echo greeting("Asmaa", "Female");
echo greeting("Badr");

?>
