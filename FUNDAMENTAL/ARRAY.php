<?php
    $buah = array("apple", "orange", "banana", "coconut");

    // echo $buah[3];

    $buah[3] = "mangga"; // MENGGANTI VALUE COCONUT KE MANGGA
    array_push($buah, "jambu"); // MENAMBAH VALUE PADA ARRAY
    array_pop($buah); // MENGHILANGKAN VALUE TERAKHIR PADA ARRAY
    array_shift($buah); // MENGHILANGKAN VALUE PERTAMA PADA ARRAY
    $reversed_buah = array_reverse($buah); // UNTUK MEMBALIK URUTAN PADA ARRAY
    count($buah); // MENGHITUNG JUMLAH VALUE DIDALAM ARRAY
    
    foreach ($buah as $sebuah) {
        echo $sebuah . "<br>";
    }

?>