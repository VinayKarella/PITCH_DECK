<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oose";
$name=$_POST["name"];
$uid=$_POST["email"];
$pwd=$_POST["pwd"];
$uname=$_POST["username"];
$sec=$_POST["ans"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (name, email,username, password,securityquestion) VALUES ('$name','$uid','$uname','$pwd','$sec')";
$result = mysqli_query($conn, $sql);
if($result==1)
{
	echo "successfully registered";
header("Location:home.html");
}
mysqli_close($conn);
?>
