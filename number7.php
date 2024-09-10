<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $teks = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus ipsum quaerat enim non a ullam nisi velit ipsa labore qui veniam ex ad laudantium voluptas, quam unde rem iste voluptatem.";
    $panjang = strlen($teks);

    if($panjang > 50){
        $teksBaru = substr_replace($teks, "...", 50);
    }

    echo "<b>Kalimat Awal : </b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus ipsum quaerat enim non a ullam nisi velit ipsa labore qui veniam ex ad laudantium voluptas, quam unde rem iste voluptatem.";
    echo "<br>";
    echo $teksBaru;

    ?>
</body>
</html>