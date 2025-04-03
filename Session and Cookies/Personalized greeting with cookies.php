<!-- Creating personalized greeting with cookies -->


<?php
session_start();
$_SESSION["greet"] = 'Hello';

// Setting cookies
setcookie('greets', 'Hello', time() + 3600, '/');
setcookie('greets', 'Good Afternoon', time() + (86400 * 7), '/');
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
    if (isset($_SESSION['greet'])) {
        echo "<p> Session wants to greet you ".$_SESSION['greet']. " :)</p>";
    } else {
        echo "<p>No greetings</p>";
    }

    if (isset($_COOKIE['greetss'])) {
        echo "<p> Cookie wants to greet you " . $_COOKIE['greets'] . "</p>";  
    } else {
        echo "<p>Cookie doesn't wants to greet you. Error occured :( </p>";
        
    }
    ?>
</body>
</html>
