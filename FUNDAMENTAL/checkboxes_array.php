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
        
        <input type="checkbox" name="pembayaran value="gopay">
        gopay<br>
        
        <input type="checkbox" name="pembayaran" value="qris">
        qris<br>
        
        <input type="checkbox" name="pembayaran" value="transfer">
        transfer<br>
        
        <input type="checkbox" name="pembayaran" value="dana">
        dana<br>
        
        <input type="submit" name="konfirmasi" value="konfirmasi">
    </form>
</body>
</html>

  <?php
        // Check if the submit button was clicked
        if(isset($_POST["konfirmasi"])){
          $pembayaran_1 = $_POST["pembayaran"];
          echo $pembayaran_1[1];
        }
    ?>