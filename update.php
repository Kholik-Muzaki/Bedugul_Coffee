<?php
ob_start();
    require 'function.php';

    $id = $_GET["id"];
    $kopi = query("SELECT * FROM datakopi WHERE id='$id'")[0];
    
    if (isset($_POST["update"])) {
        if (update($_POST) > 0){
            echo "
                <script>
                    alert ('Data Berhasil Diubah');
                    document.location.href= 'beans.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert ('Data Gagal Diubah');
                    document.location.href= 'beans.php';
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
    <title>EDIT DATA KOPI</title>
</head>
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
<body>
    <br><br><br><br><br><br><br>
    <form action="" method="post">
        <table border="1" cellspacing="0" cellpadding="5" style="margin:auto;  background: rgba(0,0,0,0.5); border:3px solid black; width:400px; height:500px;">
        <input type="hidden" name="id" value="<?= $kopi["id"];?>">
            <tr>
                <td colspan="3" style="text-align: center;">EDIT DATA KOPI</td>
            </tr>
            <tr>
                <th>Nama Kopi</th>
                <td>:</td>
                <td>
                    <input type="text" name="NamaKopi" value="<?= $kopi['NamaKopi']; ?>">
                </td>
            </tr>
            <tr>
                <th>Asal Kopi</th>
                <td>:</td>
                <td>
                    <input type="text" name="AsalKopi"  value="<?= $kopi['AsalKopi']; ?>">
                </td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>:</td>
                <td>
                    <input type="text" name="Harga"  value="<?= $kopi['Harga']; ?>">
                </td>
            </tr>
            
            <tr>
                <td colspan="3" style="text-align: center;"><button type="submit" name="update">Edit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>