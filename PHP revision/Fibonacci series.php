<?php

$f=0;
$s=1;
$third=0;
$n=20;
for($i=2;$i<=$n;$i++)
{
    echo $f." ";
    $third=$f+$s;
    $f=$s;
    $s=$third;
}
echo $third;
?>