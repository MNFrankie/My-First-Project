<?php
include"db_connect.php";
// Define $myusername and $mypassword
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
$sql="SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";
$result=mysql_query($sql); // from adminlogin table, ngetasacco
// Mysql_num_row is counting table row
$count = mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1)// only the admin
		{
			header("location: operations.php");
		}
	else {
		header("location: ../portal_2.php");
		}
?>