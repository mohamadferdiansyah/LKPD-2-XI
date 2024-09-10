<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    for($x = 1; $x <= 30; $x++){
        if(90 % $x == 0){
            echo "90 : $x = " . 90 / $x . "<br>";                
        }
    }
?>
</body>
</html>