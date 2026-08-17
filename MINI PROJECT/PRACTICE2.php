<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="PRACTICE2.php" method="post">
        <label>Masukkan angka untuk dihitung: </label>
        <input type="text" name="penghitung">
        <input type="submit" value="Hitung">
    </form>
</body>
</html>

<?php
    if (isset($_POST["penghitung"])) {
    $penghitung = $_POST["penghitung"];

    for ($i = 0;$i <= $penghitung;$i++) {
        echo $i . "<br>";
    }
}
?>