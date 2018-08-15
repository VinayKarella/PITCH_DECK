<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oose";
$uid=$_SESSION["email"];
$cname=$_POST["company"];
$pdes=$_POST["desc"];
$msize=$_POST["market"];
$cs=$_POST["CS"];
$usp=$_POST["USP"];
$crs=$_POST["CRS"];
$rm=$_POST["Revenue"];
$scalability=$_POST["scale"];
$ratio=$_POST["ratio"];
$tc=$_POST["team"];
$fp=$_POST["finance"];
$loc=$_POST["location"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_SESSION["email"])){
$sql = "INSERT INTO pitchdeck VALUES ('$uid','$cname','$pdes','$msize','$cs','$usp','$crs','$rm','$scalability','$ratio','$tc','$fp','$loc')";
$result = mysqli_query($conn, $sql);
if($result==1)
{
	$_SESSION["c"]=$cname;
	header("Location:op1.php");
}
else
	echo "fail";
}
else
	header("Location:home.html");
?>
