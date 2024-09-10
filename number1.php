<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Check</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Character Check</h1>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="text" name="text" placeholder="Masukan Kalimat" aria-describedby="textHelp">
                        <p>Masukan kalimat yang ingin Anda cek.</p>
                    </div>
                    <button type="submit" class="btn btn-primary">Check</button>
                </form>
            </div>
            <div class="card-footer">
                <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $teks = $_POST['text'];
                    if(preg_match_all('/[\'!^£$%&*()}{@#~?><>,|=_+¬-]/', $teks, $char)){
                        echo "<p class='text-center'>Kalimat : " . $teks . "</p>";
                        echo "<p class='text-center'>Karakter yang terdapat pada kalimat : " . implode(" ", $char[0]) . "</p>";
                    } else{
                        echo "<p class='text-center'>Tidak terdapaat simbol pada kalimat.</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>