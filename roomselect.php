<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/card.css" />
</head>
<?php
include "header.php";
$db = new db_connect();
$con = $db->connectdb();
$sql = "SELECT * FROM hotelrooms";
$result = mysqli_query($con, $sql);
?>
<body>
    <article>
        <div class="room-list-wrapper">
            <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="card" style="width: 20em;">
                        <img src="slider/image<?php echo $row['id']; ?>.jpeg" class="card-img-top" alt="<?php ?>">
                        <div class="card-body">
                            <a href="room.php?id=<?php echo $row['id']; ?>"><?php echo $row["roomtype"]; ?></a><br>
                            From $<?php echo $row["price"];?>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                        </div>
                    </div>
                    <?php
                }
                mysqli_close($con);
            ?>
        </div>
    </article>

</body>

</html>