<?php
require "classesandfunctions.php";
include "header.php";
$db = new db_connect();
$con = $db->connectdb();
$id = $_GET["id"];
$uname=$_SESSION['username'];
$sql = "SELECT * FROM hotelrooms WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$room=$row['roomtype'];
$sql2="INSERT into roomorder(username,roomtype)values('$uname','$room')";
mysqli_query($con,$sql2);
echo "Room booked!!";
?>
<a href="home.php">Go to home</a>
<?php
mysqli_close($con);
?>