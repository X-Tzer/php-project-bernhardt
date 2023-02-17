<?php
require_once "classesandfunctions.php";
$db = new db_connect();
$con = $db->connectdb();
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$id = $_POST['id'];


$sql = "UPDATE logindetails set firstname='$firstname', lastname='$lastname', email='$email', username='$username' where id=$id";
$result = mysqli_query($con, $sql);

if ($result) {
    header("Location:get_data.php");
} else {
    echo "Unable to update!!!";
}
