<?php

$servername="localhost:3307";
$username = "root";
$password ="";
$dbname = "dbms";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn->connect_error)
{
	die("Connection Failed : ".$conn->connect_error);
}

$em = $_POST['email'];
$ps = $_POST['password'];

$sql = "insert into signup values('$em','$ps')";
$result = $conn->query($sql);
if($result)
{
	header('Location: ../html/login.html');
	// echo ("data inserted sucessfully");
}
else
{
	die("connection failed");
}
?>