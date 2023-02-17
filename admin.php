<?php
include "header.php";
$db = new db_connect();
$con = $db->connectdb();
if(admin_check2($con))
{
?>
<a href="file_upload.php" >File Upload</a>
<a href="get_data.php" >Get Data</a>
<?php 
}
else
{ 
?>
<p><?php echo "You are not an admin!!!"; ?> </p>
<?php
}
?>