<?php
$filename = $_GET['filename'];
if(file_exists("../images/".$filename)){
    unlink("../images/".$filename);
    // echo time();
    header("Location:gallery.php");
}
else{
    echo "Was unable to find the file";
}
// $dir = "images/";
// if(file_exists($dir.$name)){
//     unlink($dir.$name);
//     header("Location:gallery.php");
// }
// else{
//     header("Location:gallery.php?error=file not found!!");
// }

?>
