<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kembalian Uang</h3>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="uang">Masukkan Uang</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="number" class="form-control" name="uang" id="uang" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Hitung</button>
                        </form>

                        <?php
                        if(isset($_POST['uang'])) {
                            $uang = $_POST['uang'];
                        
                            $koin = [500, 200, 100];
                            $hasil = [];
                            
                            echo "<h4>Kembalian Uang Rp. " . number_format($uang, 0, ",", ".") . " :</h4>";
                            echo "<table class='table table-bordered'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>Jenis Koin</th>";
                            echo "<th>Jumlah</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            
                            foreach($koin as $item) {
                                $hasil[$item] = intdiv($uang, $item);
                                $uang %= $item;
                                echo "<tr>";
                                echo "<td>Rp. $item</td>";
                                echo "<td>$hasil[$item]</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

