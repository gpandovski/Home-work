<?php
session_start();

if (isset($_SESSION["counter"])){
    $_SESSION["counter"] = $_SESSION["counter"] + 1;
    $counter = $_SESSION["counter"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit counter</title>
</head>
<body>
    <h1>Visit counter</h1>
    <p>You opened this page: </p>
    <?php 
    if(isset($_SESSION["counter"])) {
        echo "<h3>".$counter." times.</h3>";
    }  
    ?>
</body>
</html>