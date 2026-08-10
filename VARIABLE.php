<?php
    //  VARIABEL DALAM PHP

    // STRING
    $nama_siswa = "Citra Amelia <br>";
    $makanan_kesukaan = "Pizza";
    $harga_makanan = 50000;
    
    echo $nama_siswa;
    echo "hello {$nama_siswa} <br>";

    echo "{$nama_siswa} kamu dari SMKN 1 Surabaya kan??????<br>";
    echo "Harga {$makanan_kesukaan} yang dibeli {$nama_siswa} adalah: {$harga_makanan} <br>";

    // INT
    $umur = 16;
    $pengguna = 5;
    $quantitas = 9;

    echo $umur;
    echo $pengguna;
    echo $harga_makanan;

    // FLOAT
    $saldo_total = 16.78;
    $pengguna_presentase = 5.3;
    $quantitas = 9.9;


    // BOOLEAN
    $karyawan = true;
    $online = false;
    $for_sale = false;

    // CONTOH SOAL

    $Jumlah = 3;
    $Makanan = "Burger";
    $Harga = 30000;

    echo "aku telah mengorder sebanyak {$Jumlah} x {$Makanan} dengan harga satuan {$Harga} <br>";

    $total = $Jumlah * $Harga;

    echo "jadi, totalnya adalah {$total} rupiah";
?>