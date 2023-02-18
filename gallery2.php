<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
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
    </style>
</head>

<body>
    <?php
    $dir = opendir("images");
    ?>
    <section>
        <?php
        while (($file = readdir($dir)) !== false) {
            if ($file == '.' || $file == '..') {
                continue;
            }
        ?>
            <img src="images/<?php echo $file ?>" height="300x" width="300px" /> 
        <?php
        }
        ?>
    </section>
</body>

</html>