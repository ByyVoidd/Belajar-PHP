<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Radio/Checkbox</title>
</head>
<body>
    <!-- Use a single form pointing to this same file -->
    <form action="belajar.php" method="post">
        <label>OPSI PEMBAYARAN: <br></label>
        
        <input type="checkbox" name="gopay" value="gopay">
        gopay<br>
        
        <input type="checkbox" name="qris" value="qris">
        qris<br>
        
        <input type="checkbox" name="transfer" value="transfer">
        transfer<br>
        
        <input type="checkbox" name="dana" value="dana">
        dana<br>
        
        <input type="submit" name="konfirmasi" value="konfirmasi">
    </form>
</body>
</html>

  <?php
        // Check if the submit button was clicked
        if(isset($_POST["konfirmasi"])){
            // Check if the qris checkbox was ticked
            if(isset($_POST["qris"])){
                echo "<br>I like qris";
            }
            if(isset($_POST["transfer"])){
                echo "<br>I like transfer";
            }
            if(isset($_POST["dana"])){
                echo "<br>I like dana";
            }
            if(empty($_POST["qris"])){
                echo "<br>I like qris";
            }
            if(empty($_POST["transfer"])){
                echo "<br>I like transfer";
            }
            if(empty($_POST["dana"])){
                echo "<br>I like dana";
            }
        }
    ?>