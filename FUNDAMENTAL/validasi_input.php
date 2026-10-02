<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validasi_input.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        umur: <br>
        <input type="text" name="umur"><br>
        email: <br>
        <input type="email" name="email"><br>
        <input type="submit" name="login" value="text">
    </form>
</body>
</html>

<?php
if(isset($_POST["login"])){
    $username = filter_input(INPUT_POST, "username",
                            FILTER_SANITIZE_SPECIAL_CHARS);
    echo "halo {$username} <br>";

    $umur = filter_input(INPUT_POST, "umur",
                        FILTER_SANITIZE_NUMBER_INT);
    echo "Kamu umur {$umur} <br>";

    $email = filter_input(INPUT_POST, "email",
                        FILTER_SANITIZE_EMAIL);
    echo "Email kamu adalah {$email}";
}
?>