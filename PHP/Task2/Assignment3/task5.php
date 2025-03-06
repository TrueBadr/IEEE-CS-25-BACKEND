<?php

function check_status($a, $b, $c)
{
    $name="";
    $age=-1;
    $status=true;
    if(gettype($a)===gettype($name))$name=$a;
    if(gettype($b)===gettype($name))$name=$b;
    if(gettype($c)===gettype($name))$name=$c;
    if(gettype($a)===gettype($age))$age=$a;
    if(gettype($b)===gettype($age))$age=$b;
    if(gettype($c)===gettype($age))$age=$c;
    if(gettype($a)===gettype($status))$status=$a;
    if(gettype($b)===gettype($status))$status=$b;
    if(gettype($c)===gettype($status))$status=$c;
    return "Hello $name, Your Age Is $age, You ".($status ? "Are" : "Are Not" )." Available For Hire\n";
}
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
?>
