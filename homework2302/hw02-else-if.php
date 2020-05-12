<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the Week</title>
    <style>
    input{
        display:block;
        margin: 5px 0;
    }
    </style>
</head>
<body>
<h2>Days of the Week</h2> <br> 
<form method="post" action="hw02-else-if.php">
Please enter a day of the week: <br />
<input type="text" name="day" />
<p />
<input type="submit" name="submit" value="Go" />
</form>
 
<?php
}else{
$day = $_POST["day"];
if ($day == 'Monday'){
  echo "Laugh on Monday, laugh for danger.";
} elseif ($day == 'Tuesday'){
  echo "Laugh on Tuesday, kiss a stranger.";
} elseif ($day == 'Wednesday'){
  echo "Laugh on Wednesday, laugh for a letter.";
} elseif ($day == 'Thursday'){
  echo "Laugh on Thursday, something better.";
} elseif ($day == 'Friday'){
  echo "Laugh on Friday, laugh for sorrow.";
} elseif ($day == 'Saturday'){
  echo "Laugh on Saturday, joy tomorrow.";
} else {
  echo "No information for that day.";
}
 
}
?>