<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar radio</title>
</head>
<body>
    <form>
        <form action="radio-btn" method="post">
            <label>OPSI PEMBAYARAN: <br></label>
                <input type="radio" name="pembayaran" value="gopay">
                gopay<br>
                <input type="radio" name="pembayaran" value="qris">
                qris<br>
                <input type="radio" name="pembayaran" value="transfer">
                transfer<br>
                <input type="radio" name="pembayaran" value="dana">
                dana<br>
                <input type="submit" name="konfirmasi" value="konfirmasi">
        </form>
</body>
</html>

<?php
    if(isset($_POST["konfirmasi"])){
        if(isset($_POST["konfirmasi"])){
             $pembayaran = $_POST["pembayaran"];
             echo $pembayaran;
        }
        else;
        echo "Please make a selecion!";
    }
   
?>