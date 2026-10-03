<?php

    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
</head>
<body>
    <form action="login.php" method="post"><br>
        username: <br>
        <input type="text" name="username"><br>
        password: <br>
        <input type="password" name="password">
        <input type="submit" name="login" value="kirim">
    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])){
        if(!empty($_POST["username"]) && 
           !empty($_POST["username"])){

            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            echo $_SESSION["username"] . "<br>";
            echo $_SESSION["password"] . "<br>";
        }
    }
    else{
        echo "login invalid.";
    }
?>