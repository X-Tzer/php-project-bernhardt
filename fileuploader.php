<?php
$name = $_FILES['fileuploader']['name'];
$temp = $_FILES['fileuploader']['tmp_name'];

$dir = "../images/";
move_uploaded_file($temp,$dir.$name);
header("Location:gallery.php");

?>