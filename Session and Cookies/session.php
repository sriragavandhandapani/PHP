<?php

session_start();
$_SESSION["username"]='Ragav';

setcookie('user','Ragav',time()+3600,'/');
setcookie('user','Ragav',time()+(86400*7),'/');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Session and Cookies in PHP</h1>
    <?php
    if(isset($_SESSION['username']))
    {
        echo "<p> Session Username: ".$_SESSION['username']."</p>";
    }
    else{
        echo "<p> Session is not set. ";
    }
    if(isset($_COOKIE['user']))
    {
        echo "<p> Cookie Username: ".$_COOKIE['user']."</p>";
    }
    else{
        echo "<p> Cookie is not set. </p>";
    }?>
    </body>
</html>