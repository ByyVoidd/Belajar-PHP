<?php
     /* session = SGB(super global variabel) digunakan untuk menyimpan 
     informasi pada pengguna dan bisa diakses ke 
     beberapa halaman/pages pada website. bisa juga 
     untuk meyimpan info login.
     */

     session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>HomePage</title>
</head>
<body>
     Ini adalah homepage page.<br>
     <a href="login.php">Balik login page</a>
</body>
</html>