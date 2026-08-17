<?php
    $umur = -4;

    if ($umur >= 18) {
        echo "Kamu sudah dewasa <br>";
    }
    else if ($umur <= 0) {
        echo "Kamu belum lahir <br>";
    }
    else {
        echo "Kamu masih remaja <br>";
    }


?>

<?php
    $dewasa = true;

    if ($dewasa == true) {
        echo "Kamu bisa masuk website ini <br>";
    }
    else {
        echo "Kamu masih belum cukup umur <br>";
    }
?>

<?php
    $jam_kerja = 60;
    $gaji = 15;
    $gaji_mingguan = null;

    if ($jam_kerja <= 0) {
        $gaji_mingguan = 0;
    }
    else if ($jam_kerja <= 40) {
        $gaji_mingguan = $jam_kerja * $gaji;
    }
    else {
        $gaji_mingguan = ($jam_kerja * $gaji) + 100;
    }
    
    
    echo "Kamu mendapatkan gaji sebesar Rp{$gaji_mingguan} minggu ini";

?>