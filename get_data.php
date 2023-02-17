<html>

<head>
    <title>Get Data</title>
    <style>
        body {
            font-family: sans-serif;
        }

        table {
            font-style: italic;
            border-collapse: collapse;
            position: relative;
            left: 1em;
            top: 1.3em;

        }

        table,
        td,
        th {
            border: 3px solid;
            border-color: #2a09a9;

        }

        td {
            padding: 5px;
            font-weight: 600;
        }

        th {
            padding: 5px;
            font-size: 1.3rem;
            background-color: #5c4df1;
            color: #4cc9f9;
        }
    </style>
</head>

<body>
    <?php
    include "header.php";
    $db = new db_connect();
    $con = $db->connectdb();
    $sql = "SELECT * FROM logindetails";
    $result = mysqli_query($con, $sql);
    //sakjdfgsad
    // $u = $_SESSION['username'];
    // $s = "SELECT * FROM logindetails where username='$u'";
    $r = admin_check($con);
    // $ro = mysqli_fetch_array($r);
    while ($rou = $r->fetch_assoc()) {
        if ($rou["role"] == 1) {
            if (mysqli_num_rows($result) > 0) {
    ?>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th colspan=2>Actions</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo  $row["firstname"] . " " . $row["lastname"]  ?></td>
                            <td><?php echo $row["email"] ?></td>
                            <td><?php echo $row["username"] ?></td>
                            <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                            <td><a href="update.php?id=<?php echo $row["id"]; ?>">Edit User</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
    <?php
            } else {
                echo "Data not found!!";
            }
            mysqli_close($con);
        } else {
            echo "You are not an admin!!";
        }
    }
    ?>
</body>

</html>