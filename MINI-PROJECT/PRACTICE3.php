<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isset & Empty</title>
</head>
<body>
    <form action="PRACTICE3.php" method="post">
        <label>Username: </label>
        <input type="text" name="username"> <br>
        <label>Password: </label>
        <input type="password" name="password">
        <input type="submit" name="login" value="log in"><br>
        </form>
</body>

</html>

<?php

    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if (empty($username)) {
            echo "Please type your username correctly!";
        }
        elseif (empty($password)) {
            echo "Please type your password correctly!";
        }
        else {
            echo "Welcome to the homepage!";
        }
    }


?>