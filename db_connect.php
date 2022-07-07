<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if ($conn) 
    echo "Connected successfully";

else
	echo "not connected";

$db=mysql_select_db("railway",$con);
// select database
if($db)

	echo "database selected";

else
	echo "databse not selected";

?>