<?php
ob_start();
    require 'function.php';
    SESSION_START();
    if (isset($_POST["submit"])) {
        if (create($_POST) > 0){
            echo "
                <script>
                    alert ('Data Berhasil Ditambahkan');
                    document.location.href= 'beans.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert ('Data Gagal Ditambahkan');
                </script>
            ";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH KOPI</title>
    <style>
        body{
            color : white;
            background: url('img/header-bg.jpg');
            background-size : cover;
            background-attachment : fixed;
            font-family: "Roboto";
            margin: auto;
        }
    </style>
</head>
<body>
    <br><br><br><br><br><br>
    <form action="" method="post">
        <table border="1" cellspacing="0" cellpadding="5" style="margin:auto;  background: rgba(0,0,0,0.5); border:3px solid black; width:400px; height:500px;">
            <tr>
                <td colspan="3" style="text-align: center;"><h2>MASUKKAN DATA</h2></td>
            </tr>
            <tr>
                <th>Nama Kopi</th>
                <td>:</td>
                <td>
                    <input type="text" name="NamaKopi">
                </td>
            </tr>
            <tr>
                <th>Asal Kopi</th>
                <td>:</td>
                <td>
                    <input type="text" name="AsalKopi">
                </td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>:</td>
                <td>
                    <input type="text" name="Harga">
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center;"><button type="submit" name="submit">Kirim</button> | <button type="submit" name="submit"><a href="beans.php">Kembali</a></button></td>
            </tr>
            
            <input type="hidden" name="User" value="<?= $_SESSION["Login"]; ?>"
        </table>
    </form>
</body>
</html>