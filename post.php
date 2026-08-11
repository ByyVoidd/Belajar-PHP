<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
        <label>MASUKKAN USERNAME: </label><br>
        <input type="text" name="username"><br>
        <label>MASUKKAN PASSWORD: </label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="login">
    </form>
</body>
</html>


<?php

//  METODE $_POST
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
?>