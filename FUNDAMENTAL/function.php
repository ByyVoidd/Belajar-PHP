<?php
    function ByVoidd($nama) {
        echo "Meet {$nama} He is super cool <br>";
        echo "Dear {$nama}, i love you so much <br>";
        echo "I hope someday you'll be mine! <br><br><br>";
    }
    ByVoidd("Kaisar");

    function ganjil_genap($nomor){
        if($nomor % 2 == 0){
            echo "Ini bilangan genap <br><br><br>";
        }
        else{
            echo "ini bilangan ganjil <br><br><br>";
        }
    }
    echo ganjil_genap(11);

    function pythagoras_miring($a, $b) {
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }
    echo pythagoras_miring(3, 7);
    
?>