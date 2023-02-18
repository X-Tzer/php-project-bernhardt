<?php
include "header.php";
?>
<style>
    section {
        display: flex;
        justify-content: row;
        flex-wrap: wrap;
    }

    section img {
        margin: 5px;
        padding: 10px;
    }
    .photos{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>
<?php
$db = new db_connect();
$con = $db->connectdb();
$r = admin_check($con);
$dir = opendir("images");
?>
<section>
    <?php
    while ($rou = $r->fetch_assoc()) {
        while (($file = readdir($dir)) !== false) {
            if ($file == '.' || $file == '..') {
                continue;
            }
    ?><div class="photos">
                <img src="images/<?php echo $file ?>" height="300x" width="425px" />
                <?php
                if ($rou["role"] == 1) {
                ?>
                    <a href="filedelete.php?filename=<?php echo $file; ?>">Delete</a>
                <?php
                }
                ?>
            </div>
    <?php
        }
    }
    ?>
</section>