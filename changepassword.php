<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oose";
$uid=$_POST["email"];
$sec=$_POST["ans"];
$pwd=$_POST["pwd"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users WHERE email='".$uid."' AND securityquestion='".$sec."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)==1) {
    // output data of each row
	$sql = "UPDATE users SET password='".$pwd."' WHERE email='".$uid."'";
    $result = mysqli_query($conn, $sql);
    header("Location:home.html");
}

mysqli_close($conn);
?>
