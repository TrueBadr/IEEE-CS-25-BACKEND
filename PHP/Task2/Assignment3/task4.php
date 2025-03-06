<?php
function multiply(...$args)
{
    $nums = func_get_args();
    $cnt=1;
    foreach ( $nums as $n)
    {
        if(gettype($n)!="string")
        {
            if(gettype($n)=="float" || gettype($n)=="double")$n=(int)$n;
            $cnt*=$n;
        }
    }
    return $cnt;
}
echo multiply(10, 20)."\n"; // 200
echo multiply("A", 10, 30)."\n"; // 300
echo multiply(100.5, 10, "B")."\n"; // 1000
?>
