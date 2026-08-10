<?php
    // INCREMENT = Penambahan/kenaikan nilai
    // DECREMENT = Pengurangan/penurunan nilai
    // definisi umum

    $variabels = 0;
    $variabels = $variabels + 1;

    echo $variabels;
    // INCREMENT & DECREMENT

    $umur = 16;
    $umur++;

    echo $umur; //17

    $umur = 16;
    $umur--;

    echo $umur; //15

    // PRE & POST INCREMENT (++)

    $nilai = 9;

    echo $nilai++; //9
    echo "<br>";
    echo $nilai; //10

    echo ++$nilai; //10
    echo "<br>";
    echo $nilai; //10

    //  PRE & POST DECRIMENT

    echo $nilai--; //9
    echo "<br>";
    echo $nilai; //8

    echo --$nilai; //8
    echo "<br>";
    echo $nilai; //88

    /* 
    PRE BERARTI ++/-- DIDEPAN $variabel (++$nama)
    POST BERARTI ++/-- DI SETELAH $variabel ($nama++)
    */
?>