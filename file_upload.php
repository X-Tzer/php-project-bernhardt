<?php
include "header.php";
$db = new db_connect();
$con = $db->connectdb();
$u=$_SESSION['username'];
$sql = "SELECT  * FROM logindetails where username='$u'";
$result = mysqli_query($con, $sql);
//sakjdfgsad
// $u = $_SESSION['username'];
// $s = "SELECT * FROM logindetails where username='$u'";
// $ro = mysqli_fetch_array($r);
while ($result->fetch_assoc()) {
    if (admin_check2($con)) {
        if (mysqli_num_rows($result) > 0) {
?>
            <div id="file_uploader">
                <form action="fileuploader.php" method="POST" enctype="multipart/form-data">
                    <input type="file" id="fileuploader" name="fileuploader" />
                    <br>
                    <input type="submit" value="upload" />
                </form>
            </div>
<?php
        }
    }
        else {
            ?>
        <p>You are not an admin!!!</p>
        <?php
    }
} ?>