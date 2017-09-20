<?php 
//echo 'Current PHP version: ' . phpversion();
//Create connection
//mysql_connect('handson-mysql', 'kumar', 'kumar');
$conn=mysqli_connect('localhost','root','kumar123','userdata');
// to Check connection if established or not
if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
		else
	{
		echo"<i><p style= 'color:blue;'>*********************Userdata DB Connection Established Sucessfully**************************<br><p><i>";
	}


?>