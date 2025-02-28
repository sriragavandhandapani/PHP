<?php
$a=[10,20,30,550,50];
$max=$a[0];
foreach($a as $b)
{
    if($b>$max)
    {
        $max=$b;
    }
}
echo $max;

?>