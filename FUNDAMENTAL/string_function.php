<?php
    $username = "ByVoidd";
    $nomor = "6xxxxxxxxxxxx";

    // $username = strtoupper($username);
    // $username = strtolower($username);
    // $username = trim($username);
    // $username = str_pad($username, 10, "d");
    // $nomor = str_replace("-", "", $nomor);
    // username = strrev($username);
    // $username = str_shuffle($username);
    // $username = str_pad($username, 10, "d");
    // $equals = strcmp($username, "ByVoidd");
    // $count = strlen($nomor);
    // $index = strpos($nomor, "-");
    // $firstname = substr($username, 10, 3);
    // $lastname = substr($username, 4);
    $fullname = explode(" ", $username);
    echo implode(" ", $fullname);

?>