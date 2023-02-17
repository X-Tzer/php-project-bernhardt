<?php
include "header.php";
$db = new db_connect();
$con = $db->connectdb();
$id = $_GET["id"];
$sql = "SELECT * FROM hotelrooms WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result)
?>
<h1><?php echo $row["roomtype"]; ?></h1>