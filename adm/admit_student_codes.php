<?php
//include"db_connect.php";
$con=mysqli_connect("localhost","root","","chianda");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="INSERT INTO `admission`(`date`, `yearofbirth`, `gender`, `fees`, `fname`, `sname`,`kcpe`, `parentfname`, `parentsname`, `parentmobile`, `nationalid`, `address`, `county`, `primaryname`, `primarycounty`, `primaryaddress`) VALUES 
('$_POST[date]','$_POST[yearofbirth]','$_POST[gender]','$_POST[fees]','$_POST[fname]','$_POST[sname]','$_POST[kcpe]','$_POST[parentfname]','$_POST[parentsname]','$_POST[parentmobile]','$_POST[nationalid]','$_POST[address]','$_POST[county]','$_POST[primaryname]','$_POST[primarycounty]','$_POST[primaryaddress]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  //echo "Success";
header ("location: admit_student.php");
mysqli_close($con);
?>