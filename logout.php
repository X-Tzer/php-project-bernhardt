<?php
include "classesandfunctions.php";
$s = new Session();
$s->ses_start();
$s->ses_close(); 
header("Location:form.php");
?>
