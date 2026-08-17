<?php
    $nilai = "A+";

    
    switch($nilai) {
        case 'A+': 
            echo "100";
            break;
        case 'A': 
            echo "95";
            break;
        case 'A-': 
            echo "90";
            break;    
        case 'B+': 
             echo "85";
            break;
        case 'B': 
            echo "80";
            break;
        case 'B-': 
            echo "75";
            break;
        case 'C+': 
            echo "70";
            break;
        case 'C': 
            echo "65";
            break;
        case 'C-': 
            echo "60";
            break;
        default:
            echo "nilaimu terlalu rendah";
            break;
    }
?>