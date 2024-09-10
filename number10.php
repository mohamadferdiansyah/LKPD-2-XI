<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Jawaban</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 mb-5">
        <h1 class="text-center">Form Nilai</h1>
        <form method="post">
            <div class="form-group">
                <label for="namaSiswa" style="font-weight: bold; font-size: 20px">Nama Siswa</label>
                <input type="text" class="form-control" id="namaSiswa" name="namaSiswa" required>
            </div>
            <?php
            $jawabanBenar = ['A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'E'];
            for ($i = 1; $i <= 10; $i++) {
                echo "<div class='form-group'>
                        <label for='jawaban$i'>Jawaban Soal No $i</label>
                        <select class='form-control' id='jawaban$i' name='jawaban[]'>
                            <option disabled hidden selected>Pilih</option>
                            <option value='A'>A</option>
                            <option value='B'>B</option>
                            <option value='C'>C</option>
                            <option value='D'>D</option>
                            <option value='E'>E</option>
                        </select>
                    </div>";
            }
            ?>
            <button type="submit" class="btn btn-primary">Input</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $namaSiswa = $_POST['namaSiswa'];
            $jawabanSiswa = $_POST['jawaban'];
            $benar = 0;
            $salah = 0;

            foreach ($jawabanSiswa as $index => $item) {
                if ($item == $jawabanBenar[$index]) {
                    $benar += 1;
                } else {
                    $salah += 1;
                }
            }

            echo "<div class='alert alert-info mt-2' role='alert'>
                    Nama Siswa : $namaSiswa <br>
                    Jumlah Jawaban Benar : <b>$benar</b> <br>
                    Jumlah Jawaban Salah : <b>$salah</b>
                    </div>";
        }
        ?>
    </div>
</body>
</html>
