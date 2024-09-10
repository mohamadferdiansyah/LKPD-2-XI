<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Belanjaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card p-3">
                    <h5 class="card-title">Hitung Total</h5>
                    <form method="post">
                        <div class="mb-3">
                            <label for="harga" class="form-label">Total Pembelanjaan Anda</label>
                            <input type="number" name="harga" class="form-control" id="harga" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Hitung</button>
                    </form>
                    <hr>
                    <div class="alert alert-primary" role="alert">
                        <?php
                        if(isset($_POST['harga'])){
                            $tanggal = strtotime("now");
                            $hari = date('l', $tanggal);
                            $harga = $_POST['harga'];
                        
                            if($hari == "Tuesday" && $harga > 100000){
                                $totalDiskon = ($harga * 12) / 100 ;
                                $totalBayar = $harga - $totalDiskon;
                            } elseif($hari == "Tuesday"){
                                $totalDiskon = ($harga * 5) / 100 ;
                                $totalBayar = $harga - $totalDiskon;
                            } elseif($harga > 100000){
                                $totalDiskon = ($harga * 7) / 100 ;
                                $totalBayar = $harga - $totalDiskon;
                            } else{
                                $totalBayar = $harga;
                            }
                        
                            echo "Hari ini hari : <b>" . $hari . "</b><br>";
                            echo "Total pembelanjaan : <b>" . "Rp " . number_format($harga, 0, ",", ".") . "</b><br>";
                            echo "Total yang harus dibayar : <b>" . "Rp " . number_format($totalBayar, 0, ",", ".") . "</b>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

