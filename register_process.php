<?php
require "classesandfunctions.php";
$db = new db_connect();
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$password = md5($_POST['password']);
$email = $_POST['mail'];
$username = $_POST['username'];

//empty validation
if (empty($firstname) || empty($lastname) || empty($phone) || empty($password) || empty($email) || empty($username)) {
    header("Location:register.php?error=incomplete form!!");
}
// to store in database
else {
    $con = $db->connectdb();
    $sql = "insert into logindetails(firstname,lastname,phone,password,email,username)values('$firstname','$lastname','$phone','$password','$email','$username')";
    mysqli_query($con, $sql);
    echo "New record added!";
    ?>
    <br><a href="login.php">Go Back</a>
<?php
    //CLOSING DATABASE
    mysqli_close($con);
}
