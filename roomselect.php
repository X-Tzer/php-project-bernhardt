<?php
include "header.php";
$db = new db_connect();
$con = $db->connectdb();
$sql = "SELECT * FROM hotelrooms";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms and suits</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="card.css" />
</head>

<body>
    <article>
        <div class="room-list-wrapper">
            <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
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