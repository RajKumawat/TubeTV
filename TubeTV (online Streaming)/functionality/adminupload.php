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

$name = $_POST['name'];
$genre = $_POST['genre'];
$season = $_POST['season'];
$episode = $_POST['episode'];
$duration = $_POST['duration'];
$rating = $_POST['rating'];

// echo "name = ".$name."<br>genre = ".$genre."<br>season =".$season."<br>episode = ".$episode."<br>duration = ".$duration."<br>rating =".$rating;

// $imageinput = $_POST['imageinput'];

$sql = "insert into adminupload values ( NULL , '$name','$genre','$season','$episode','$duration','$rating')";

$result = $conn->query($sql);

if($result)
{
	// header('Location: ../html/login.html');
	// echo ("data inserted sucessfully");
	echo "<script>
	alert('data inserted sucessfully ');
	window.location.href='../html/adminindex.html';
	</script>";
}
else
{
	die("connection failed");
}

$conn->close();
?>