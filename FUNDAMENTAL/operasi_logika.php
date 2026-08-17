<?php
    /*
    && = AND
    || = OR
    !  = NOT
    */

    // PENGGUNAAN OPERASI LOGIKA PADA KONDISI SUHU

    $suhu = 34;

    if ($suhu >= 20 && $suhu <= 35) {
        echo "Cuaca hari ini sedang cerah <br>";
    }
    else if ($suhu > 35) {
        echo "Cuaca hari ini sangat panas <br>";
    }
    else if ($suhu < 20 || $suhu < 0) {
        echo "Cuaca hari ini sangat dingin <br>";
    }
    else {
        echo "Cuaca hari ini sangat panas <br>";
    }
    
    // PENGGUNAAN OPERASI LOGIKA PADA CEK LEGALITAS UMUR

    $UMUR = 16;
    $STATUS_KEPENDUDUKAN = true;

    if (!$UMUR >= 18 || !$STATUS_KEPENDUDUKAN = true) {
        echo "Tidak bisa ikut pemilu";
    }
    else {
        echo "Bisa ikut pemilu";
    }
?>
