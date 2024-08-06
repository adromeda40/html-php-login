<?php
// database connection code
if(isset($_POST['sent']))
{ 
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');  i tryed both
$con = new mysqli_connect("localhost", "user", "1234","db");

// get the post records

$user = $_POST["username"];
$pass = $_POST["password"];

// database insert SQL code
$sql = "INSERT INTO `info` (`Id`, `Username`, `Password`,) VALUES ('0', '$user', '$pass')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
