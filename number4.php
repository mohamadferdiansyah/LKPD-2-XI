<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for($i = 0; $i < 2; $i++){
            for($x = 0; $x < 4; $x++){
                for($z = 0; $z < 8; $z++){
                    echo "*";
                }
                echo "<br>";
            }
            echo "<br>";
        }
    ?>
</body>
</html>