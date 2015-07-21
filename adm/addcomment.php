<?php
//include"db_connect.php";
$con=mysqli_connect("localhost","root","","chianda");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="INSERT INTO comments (name,email,comment)
VALUES
('$_POST[name]','$_POST[email]','$_POST[comment]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  //echo "Success";
header ("location: ../contact us.php");
mysqli_close($con);
?> 