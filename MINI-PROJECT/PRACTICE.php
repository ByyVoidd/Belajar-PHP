<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE PESAN KOPI</title>
</head>
<body>
    <h1>SELAMAT DATANG DI WEBSITE PESAN KOPI</h1>
    <form action="PRACTICE.php" method="post">
      <label>Mau pesan berapa? </label> <br>
      <input type="text" name="jumlah">
      <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $item = "americano";
    $harga = 20000;
    $total_produk = $_POST["jumlah"];
    $harga_akhir = null;

    $harga_akhir = $total_produk * $harga;
         
    echo "Kamu telah memesan sebanyak {$total_produk} {$item} dengan harga satuan {$harga} <br>";
    echo "Totalnya adalah: {$harga_akhir}";



?>