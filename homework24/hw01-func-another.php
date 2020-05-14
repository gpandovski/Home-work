<?php
const $months=array(
  'January'=>31,
  'February'=>'28 days, if leap year 29',
  'March'=>31,
  'April'=>30,
  'May'=>31,
  'June'=>30,
  'July'=>31,
  'August'=>31,
  'September'=>30,
  'October'=>31,
  'November'=>30,
  'December'=>31
);
 
function makeOptions($str){
  echo "<option value=\"$str\">" .ucfirst($str). "</option>\n";
}
?>

<?php
if(!isset ($_POST['submit'])){
?>
function makeSelect () {
<form method="post" action="hw01-func-another.php">
<p>Please choose a month.</p>
<select name="month">
<?php
  foreach ($months as $k => $v){
    option($k);
  }
}
?>
</select>  
<p />
<input type="submit" name="submit" value="Go" />
</form>
<?php
function makeSelect () { 
} else {
  $month = $_POST['month'];
  if ($month == 'February'){
    echo "The month of February has " . $months['February'] . ".";
  }else{
    echo "The month of $month has $months[$month] days.";
    }
  }
}
?>