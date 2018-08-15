<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oose";
$uid=$_SESSION["c"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT uniquesellingproposition,customerretentionstrategy,revenuemodel,scalability FROM pitchdeck WHERE companyname='".$uid."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
} 

mysqli_close($conn);
?>