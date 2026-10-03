<?php
    /* cookie = Informasi tentang user yang tersimpan di web
       browser unutk menargetkan iklan, preferensi browsing,
        dan non-sensitive data
    */
    setcookie("favoritefood", "pizza", time() + 86400, "/");
    setcookie("favoritedrink", "soda", time() + 86400, "/");
    setcookie("favoritedessert", "softcake", time() + 86400, "/");

    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value} <br>";
    }

    if(isset($_COOKIE["favoritefood"])){
        echo "Ayo beli {$_COOKIE["favoritefood"]}!";
    }
    else{
        echo "Aku ga tau hal apa yang kamu suka";
    }
    
?>  