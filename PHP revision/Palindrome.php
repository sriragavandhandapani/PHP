<?php

$a="Madams";
$tru=strtolower(str_replace(" ","",$a));
$rev=strrev($tru);
if($tru==$rev)
{
    echo "$a is Palindrome";
}
else{
    echo "$a is not a palindrome";
}