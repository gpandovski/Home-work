//1.
<?php 
echo date("Y"); ?> PHP Exercises - CodeAcademy.

//2.
<?php
$date1 = "11-05-2020"; 
$date2 = "12-04-2021"; 
  
$dateDiff = dateDiffInDays($date1, $date2); 
  printf("Difference between two dates: "
   . $dateDiff . " Days "); 
?>

//3.
<?php
echo date("Y/m/d") . "\n";
echo date("y.m.d") . "\n";
echo date("d-m-y")."\n";
?>

//4.
<?php
$date1 = "1981-11-04";
$date2 = "2013-09-04";

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf("%d years, %d months, %d days\n", $years, $months, $days);
?>

//5.
<?php
$odate = "2012-09-12";
$newDate = date("d-m-Y", strtotime($odate));
echo $newDate."\n";
?>

//6.
<?php
$date1 = date_create("2017-04-15");
$date2 = date_create("2017-05-18");
echo 'Days Count - '.$diff->format("%a");
?>

//7.
<?php
$dt = "2020-05-11";
echo 'First day : '. date("Y-m-01", strtotime($dt)).' - Last day : '. date("Y-m-t", strtotime($dt)); 
?>

//8.
<?php
echo date('l \t\h\e jS');
?>

//9.