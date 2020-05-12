<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>How`s your weather</title>
</head>
<body>
<form method="post" action="hw02-arr-user.php">
<h2>How`s your weather?</h2>
<h2>With arrays</h2>
<p>Please enter your information:</p>
City: <input type="text" name="city" />
Month: <input type="text" name="month" />
Year: <input type="text" name="year" />
<p>Please choose the kinds of weather you experienced from the list below. 
<br />Choose all that apply. </p>
<input type="checkbox" name="weather[]" value="sunshine" />Sunshine<br />
<input type="checkbox" name="weather[]" value="clouds" />Clouds<br />
<input type="checkbox" name="weather[]" value="rain" />Rain<br />
<input type="checkbox" name="weather[]" value="hail" />Hail<br />
<input type="checkbox" name="weather[]" value="sleet" />Sleet<br />
<input type="checkbox" name="weather[]" value="snow" />Snow<br />
<input type="checkbox" name="weather[]" value="wind" />Wind<br />
<input type="checkbox" name="weather[]" value="cold" />Cold<br />
<input type="checkbox" name="weather[]" value="heat" />Heat<br />
<p /> 
<input type="submit" name="submit" value="Go" />
</form>
</body>
</html>
<?php
if (!isset($_POST['submit'])){
?>
<?php
}else{
$inputLocal = array(
  $_POST['city'],
  $_POST['month'],
  $_POST['year']
);
echo "In $inputLocal[0] in the month of $inputLocal[1] $inputLocal[2], you
 observed the following weather:<br  