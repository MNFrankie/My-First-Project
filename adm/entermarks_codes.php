<?php
//include"db_connect.php";
$con=mysqli_connect("localhost","root","","chianda");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="INSERT INTO `marks`(`student_no`, `form`, `stream`, `fname`, `date`, `english`, `maths`, `kiswahili`) VALUES
('$_POST[student_no]','$_POST[form]','$_POST[stream]','$_POST[fname]','$_POST[date]','$_POST[english]','$_POST[maths]','$_POST[kiswahili]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  //echo "Success";
header ("location: entermarks.php");
mysqli_close($con);
?>