<?php
function greeting($name, $gender = "") 
{
    if ($gender == "Male") return "Hello Mr $name";
    elseif ($gender == "Female")return "Hello Miss $name";
     else return "Hello $name";
}
echo greeting("Osama", "Male") . "\n"; 
echo greeting("Eman", "Female") . "\n";
echo greeting("Sameh") . "\n";
?>
