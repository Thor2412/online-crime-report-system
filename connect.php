<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='root';
$conn_error='Could not connect';
$mysql_db='crime_portal';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
if(!@$con||!@mysqli_select_db($con,$mysql_db))
{
  die($conn_error);
}
?>