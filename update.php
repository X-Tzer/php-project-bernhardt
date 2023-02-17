<?php
include "header.php";
require "classesandfunctions.php";
$db = new db_connect();
$con = $db->connectdb();
$id = $_GET["id"];
$sql = "SELECT id,firstname,lastname,email,username FROM logindetails WHERE id=$id";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    $record = mysqli_fetch_array($result);
?>
    <form action="update_user.php" method="POST">
        <table>
            <tr>
                <td>
                    <input type="hidden" name="id" value="<?php echo $record['id'] ?>" />
                </td>
            </tr>
            <tr>
                <td>
                    Firstname:
                    <input type="text" name="firstname" value="<?php echo $record['firstname'] ?>" />
                </td>
            </tr>
            <tr>
                <td>
                    Lastname:
                    <input type="text" name="lastname" value="<?php echo $record['lastname'] ?>" />
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                    <input type="text" name="email" value="<?php echo $record['email'] ?>" />
                </td>
            </tr>
            <tr>
                <td>
                    Username:
                    <input type="text" name="username" value="<?php echo $record['username'] ?>" />
                </td>
            </tr>

        </table>
        <input type="submit" value="Update" />

    </form>
<?php
} else {
    echo "Unable to get record";
}

?>