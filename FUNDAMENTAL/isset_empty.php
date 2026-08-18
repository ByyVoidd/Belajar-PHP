<?php
    // isset() = True ketika variabel di deklarasi dan tidak kosong(null).
    // empty() = True ketika variabel tidak di deklarasi, false, null.

    $username2 = "ByVoidd";
    echo isset($username); //1

    $username2 = null;
    echo isset($username); //0

    $username = null;

    if(isset($username)) {
        echo "The variable is set <br>";
    }
    else {
        echo "The variable is empty <br>";
    }

    if(empty($username)) {
        echo "The variable is empty <br>";
    }
    else {
        echo "The variable is set <br>";
    }

?>