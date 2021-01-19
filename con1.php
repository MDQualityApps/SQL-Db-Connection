<?php
$servername="localhost";
$username="root";
$password="root";
$conn=new mysqli($servername,$username,$password);
//check connection
if ($conn->connect_error) 
{
die("failed connection:".$conn->connect_error);
}
else
{
	echo"connect successfully";
}
?>