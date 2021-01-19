<?php

$servername="localhost";
$username="root";
$password="root";
$dbname="student";
$conn=new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) 
{
die("failed connection:" . $conn->connect_error);
}
//else
//{
//echo"connect successfully";
//}
$sql="SELECT user_id, name, email,password FROM userinfo";
$result = $conn->query($sql);

if ($result->num_rows>0) {
	while($row = $result->fetch_assoc()) {
		
        echo $row["user_id"];
		echo $row["name"];
		echo $row["email"];
        echo $row["password"];
		echo "<br>";
	}
}
else
{
	echo"zero rows in db";
}
$conn->close();
?>