<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite City</title>
    <style>
    input{
        display:block;
        margin: 5px 0;
    }
    </style>
</head>
<body>
<h2>Favorite City</h2> <br>
<?php
if (!isset($_POST['submit'])){
?>
 
<form method="post" action="yourfile.php">
Please enter your favorite city:  <br />
<input type="text" name="city" />
<p />
<input type="submit" name="submit" value="Go" />
</form>
 
<?php
}else{
 $city = $_POST['city'];
echo "Your favorite city is $city.";
 
}
?>

</body>
</html>