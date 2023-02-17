<?php
require "classesandfunctions.php";
$db = new db_connect();
$con = $db->connectdb();
$id = $_GET["id"];
$del = "delete from logindetails where id='$id'";
$res = mysqli_query($con, $del);
if ($res) {
    header("Location:get_data.php");
}
echo "Failed to set the record ";
mysqli_close($con);
