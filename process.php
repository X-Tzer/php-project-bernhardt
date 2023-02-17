<?php
require "classesandfunctions.php";
$sess = new Session();
$sess->ses_start();
$db = new db_connect();
$con = $db->connectdb();
$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT count(*) FROM logindetails where username='$username' and password='$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$count = $row['count(*)'];

if ($count > 0) {
    $_SESSION['username'] = $username; // storing username in session
    header("Location:welcome.php");
} else {
    header("Location:form.php?error=INVALID CREDENTIALS!!");
}
