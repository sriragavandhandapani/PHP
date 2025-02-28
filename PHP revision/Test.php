<?php

echo "Hello World!\n";

$value=2;
$power=-3;
$res=0;
for($i=0;$i>$power;$i++)
{
    if($power < 0)
    {
        $res=1/($value**$power);
    }
}

echo "$res";

?>


