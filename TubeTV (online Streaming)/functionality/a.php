<?php

	$error = '';
	if(session_status() == PHP_SESSION_NONE)
	{
		session_start();
	}
	if(isset($_SESSION['isset']))
	{
		header('Location: ../html/demo.html');
	}

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
	$pas = $_POST['password'];
	// $passcheck = "";

	$sql = "SELECT * FROM signup WHERE email='".$em."' and password = '".$pas."' ";
	// echo $sql;
	$result = mysqli_query($conn,$sql);
	 // $resultcheck = mysqli_num_rows($result);

	if($result->num_rows > 0)
	{
		$row = mysqli_fetch_array($result);
		if(is_array($row))
		{
			header('Location: ../html/demo.html');
		}
		else
		{
			echo "Wrong password";
		}
	}
	else
	{
		echo ('Your id password do not match with database..Please Signup !!!');
	}
?>