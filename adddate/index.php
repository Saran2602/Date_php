<?php
$mysqli = new mysqli("localhost","root","","test");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$adate = "SELECT registration_ondate FROM users WHERE user_name='sa'";
$query =($mysqli ->query($adate)); 
$var=$query->fetch_all();
print_r($var);
$date=date_create($var[0][0]);
// $date2=date_create("Y-m-d");
// $add=date_add($date,$date2);
date_add($date,date_interval_create_from_date_string("8days"));
echo date_format($date,"Y-m-d");

 $time = date_default_timezone_set("Asia/Kolkata");
<br> echo  date("h:i:s"); <br>


?>
