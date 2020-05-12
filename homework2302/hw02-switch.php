<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pick a day</title>
</head>
<body>  

<?php
if (!isset($_POST['submit'])){
?>
 
 <form method="post" action="hw02-switch.php">
Please choose a day:<p />
<select name="day">
   <option value="Monday">Monday</option>
   <option value="Tuesday">Tuesday</option>
   <option value="Wednesday">Wednesday</option>
   <option value="Thursday">Thursday</option>
   <option value="Friday">Friday</option>
   <option value="Saturday">Saturday</option>
   <option value="Sunday">Sunday</option>
</select> 
<p />
<input type="submit" name="submit" value="Go"/>
</form>
 
<?php
}else{
$day = $_POST['day'];
switch($day){
  case 'Monday':
    echo 'Laugh on Monday, laugh for danger.';
    break;
  case 'Tuesday':
    echo 'Laugh on Tuesday, kiss a stranger.';
    break;
  case 'Wednesday':
    echo 'Laugh on Wednesday, laugh for a letter.';
    break;
  case 'Thursday':
    echo 'Laugh on Thursday, something better.';
    break;
  case 'Friday':
    echo 'Laugh on Friday, laugh for sorrow.';
    break;
  case 'Saturday':
    echo 'Laugh on Saturday, joy tomorrow.';
    break;
  default:
    echo 'No information for that day.';
    break; 
}
?>
<p />
<form action="hw02-switch.php">
<input type="submit" name="submit" value="Back" onclick="self.location='hw02-switch.php'" />
</form>
<?php
}
?>
</body>
</html>