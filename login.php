<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oose";
$uid=$_POST["email"];
$pwd=$_POST["pwd"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users WHERE email='".$uid."' AND password='".$pwd."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)==1) {
    // output data of each row
	session_start();
	$_SESSION["email"]=$uid;
	$sql = "SELECT username FROM users WHERE email='".$uid."'";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
	$_SESSION["user"]=$row["username"];
    header("Location: startups.php");
    }
else {
	echo "failed";
    header("Location:home.html");
}
?>
