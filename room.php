<?php
include "header.php";
$db = new db_connect();
$con = $db->connectdb();
$id = $_GET["id"];
$sql = "SELECT * FROM hotelrooms WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>
<h1><?php echo $row["roomtype"]; ?></h1>
<div>Guests:<?php echo $row['guests'];?></div>
<div>Children:<?php echo $row['children'];?></div>
<div>Room size:<?php echo $row['roomsize'];?> m<sup>2</sup></div>
<div>Bed: <?php echo $row['bedsize'];?></div>
<div>Price: $<?php echo $row['price'];?> per day</div>
<form method="post" action="roomsave.php?id=<?php echo $id;?>">
    <input type="submit" value="Order"/>
</form>
