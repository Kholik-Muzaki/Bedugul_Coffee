<?php
ob_start();
include 'function.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <div class="container text-center">
        <img src="img/berhasil.gif" alt="" height="300px" width="300px">
    </div>
    <div class="container text-center">
        <h3>Mohon Menunggu Pesanan Anda </h3>
        <p>Pesanan Anda Berhasil dibuat, Pesanan anda dengan nomor <br>
            <span class="">
                <?php
                echo $_GET['id']
                ?>
            </span>
        </p>
        <a href="index.php" target="blank"><button type="button" class="btn btn-success">Kembali ke Home</button></a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>