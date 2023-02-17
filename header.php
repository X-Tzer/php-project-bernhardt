<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 
        <?php
        echo basename($_SERVER['PHP_SELF']);
        ?>
        </title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: sans-serif;
        }

        .header {
            background-color: red;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 5px;
        }

        .hello {
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 2rem;
        }

        header a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php
    require_once "classesandfunctions.php";
    $s = new Session();
    $s->ses_start();
    $u = $_SESSION['username'];
    $db = new db_connect();
    $con = $db->connectdb();
    $r = admin_check($con);

    if (empty($u)) {
        header("Location:form.php");
    }
    ?>
    <div class="header">
        <span class="hello">
            <?php
            echo "Hello " . $u . "!!";
            ?>
        </span>
        <a href="profile.php">Profile</a>
        <a href="gallery.php" name ="Gallery">Gallery</a>
        <a href="roomselect.php">Rooms</a>
        <?php
        while ($rou = $r->fetch_assoc()) {
            if ($rou["role"] == 1) {
        ?>
                <a href="admin.php">Admin</a>
        <?php
            }
        }
        ?>
        <a href="logout.php">Log out</a>
    </div>
</body>

</html>