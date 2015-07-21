<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="chianda"; // Database name
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password");//or die("cannot connect");
mysql_select_db("$db_name")or die("mbona haipati dbase?");
//echo "connected to server and dbase";
?>