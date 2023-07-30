<?php
ob_start();
require_once('header.php');

require 'function.php';
$kopi = query("SELECT * FROM datakopi");

if (isset($_POST["search"])) {
    $kopi = search($_POST["keyword"]);
}

SESSION_START();
if (!isset($_SESSION["Login"])) {
    header("Location:Login.php");
    exit;
}
if (isset($_POST['submit'])) {
    $kopi = search($_POST['search']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bedugul Coffe</title>

    <!-- My Icon -->
    <link rel="shortcut icon" href="img/menu/1.jpg" />

    <!-- My Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

    <!-- My Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<!-- Hero Section Start-->
<section class="hero" id="home">
    <main class="content">
        <div class="data" style="width:100%;">
            <table border=1 cellspacing="1" cellpadding="5" class="kopi" style="margin:auto;  background: rgba(0,0,0,0.5); border:3px solid black;">
                <tr style="text-align:center;">
                    <h1>DATA KOPI</h1>
                    <form action="" method="post">
                        <input type="text" name="keyword" value="" size="40">
                        <button type="submit" name="search">search</button>
                    </form><br>
                </tr>
            </table>
            <br><br>
            <table border=1 cellspacing="1" cellpadding="5" class="kopi" style="margin:auto;  background: rgba(0,0,0,0.5); border:3px solid black;">
                <tr>
                    <th>No</th>
                    <th style="width:200px;">Nama Kopi</th>
                    <th style="width:150px;">Asal Kopi</th>
                    <th style="width:100px;">Harga</th>
                    <th style="width:200px;">Ditambahkan Oleh</th>
                    <th style="width:100px;">Opsi</th>

                </tr>
                <?php $i = 1; ?>
                <?php foreach ($kopi as $coffee) : ?>
                    <!-- <input type="hidden" name="datakopi" value="<?= $coffee['datakopi']; ?>"> -->
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $coffee["NamaKopi"]; ?></td>
                        <td><?= $coffee["AsalKopi"]; ?></td>
                        <td>Rp <?= $coffee['Harga']; ?></td>
                        <td><?= $coffee["User"]; ?></td>
                        <td><a href="check.php?id=<?= $coffee["id"]; ?>&x=edit">Edit</a> |
                            <a href="check.php?id=<?= $coffee["id"]; ?>&x=delete" onclick="return confirm('Beneran nih??')" ;>Hapus</a>
                        </td>
                    </tr>

                    <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </main>
</section>
<!-- Hero Section End-->


<!-- Footer Start -->
<?php
require_once('footer.php');
?>

<!-- Footer End -->


</body>

</html>