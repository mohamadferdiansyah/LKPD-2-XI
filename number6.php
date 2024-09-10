<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $barang = [
            [
                'nama_barang' => 'Pasta Gigi',
                'harga_barang' => 18000,
                'jumlah_beli' => 1
            ],
            [
                'nama_barang' => 'Sabun Mandi',
                'harga_barang' => 5000,
                'jumlah_beli' => 3
            ],
            [
                'nama_barang' => 'Aloe Vera Sheet Mask',
                'harga_barang' => 15000,
                'jumlah_beli' => 4
            ]
        ];

    
    echo "Daftar Belanjaan :";
    echo "<br>";
    echo "<br>";
    
    $totalUang = 0;
    foreach($barang as $index => $item){
        $totalUang += $item['harga_barang'] * $item['jumlah_beli'];
        echo ($index + 1) . ". " . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") " . ($item['harga_barang'] * $item['jumlah_beli']) . "<br>";
    }

    echo "<br>";
    echo "Total harga yang harus dibayar adalah <b>Rp. " . number_format($totalUang, 0, ",", ".");

    ?>
</body>
</html>