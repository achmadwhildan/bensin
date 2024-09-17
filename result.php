<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div{
        padding: 50px 70px;
        background-color: white;
        box-shadow: 10px 10px 10px 10px lightblue;
        margin: 0 30% 0 30%;
    }
    .btn-kembali {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: lightblue;
            color: black;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }
        .btn-kembali:hover {
            background-color: deepskyblue;
        }
</style>
<body>
<?php
    require 'tunai.php';

    if(isset($_POST['submit'])) {
        $jenis = $_POST['jenis'];
        $jumlah = $_POST['jumlah'];
        $ppn = 10; 
        if(empty($jenis) || empty($jumlah)){
            echo "<h1 style='text-align:center; color:red;'>Masukan semua data!</h1>";
        } else if($jumlah < 1){
            echo "<h1 style='text-align:center; color:red;'>Masukan data yang benar!</h1>";
        } else {
            $transaksi = new Shell($jenis, $jumlah, $ppn);

            echo "<div><center>";
            echo "<h3>Anda membeli bahan bakar minyak tipe: </h3>" . $transaksi->getJenis();
            echo "<h3>Dengan Jumlah: " . $transaksi->getJumlah() . " Liter</h3>";
            echo "Harga per unit: Rp. " . number_format($transaksi->getHarga(), 2) . "<br>";
            echo "PPN (" . $transaksi->getPpn() . "%): Rp. " . number_format(($transaksi->getHarga() * $transaksi->getJumlah() * $transaksi->getPpn() / 100), 2) . "<br>";
            echo "<strong>Total yang harus anda bayar:</strong> Rp. " . number_format($transaksi->totalPembayaran(), 2);
            echo " <button class=btn-kembali onclick=window.location.href='index.php';>Kembali</button>";
            echo "<br>";
            echo "</center></div>";
        }
    }
    ?>
</body>
</html>