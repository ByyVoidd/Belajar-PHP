<?php
    $ibu_kota = array("Indonesia"=>"Jakarta",
                    "Filipina"=>"Manila",
                    "Jepang"=>"Tokyo",
                    "China"=>"Beijing");

    $ibu_kota["Indonesia"] = "Surabaya"; // MENGGANTI VALUE PADA ARRAY
    $ibu_kota["Jerman"] = "Munchen"; // MENAMBAH VALUE PADA ARRAY
    array_pop($ibu_kota); // MENGHILANGKAN VALUE TERAKHIR PADA ARRAY
    array_shift($ibu_kota); // MENGHILANGKAN VALUE PERTAMA PADA ARRAY
    $kunci_array = array_keys($ibu_kota); // UNTUK MENAMPILKAN VARIABEL PERTAMA
    $value_array = array_values($ibu_kota); // UNTUK MENAMPILKAN VARIABEL KEDUA
    $ibu_kota = array_flip($ibu_kota); // UNTUK MEMBALIK KEY DAN VALUE 
    $ibu_kota = array_reverse($ibu_kota); // UNTUK MEMBALIK URUTAN VARIABEL DALAM ARRAY
    count($ibu_kota); // MENGHITUNG JUMLAH VALUE DIDALAM ARRAY

    // echo $ibu_kota["Indonesia"];
    foreach($ibu_kota as $key => $value) {
        echo "{$key} = {$value} <br>";
    }
?>