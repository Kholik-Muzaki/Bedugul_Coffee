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

<body>
    <!-- Hero Section Start-->
    <section class="hero" id="home">
        <main class="content">
            <h1>Mari Pesan Biji Kopi Kami <span>Kopi</span></h1>
            <p>
                Sangat Berkualitas! 
            </p>
            <a href="pemesanan.php" class="cta">Pesan Sekarang</a>
        </main>
    </section>
    <!-- Hero Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="contact">
        <h2><span>Kontak</span> Kami</h2>
        <p>
            Jika ada pertanyaan, hubungi kami 
        </p>
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.866157315046!2d106.8477443!3d-6.2813203999999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f26a39411b1d%3A0x563ebed58b07da4c!2sJl.%20Pagu%20Jaten%2C%20Pejaten%20Timur%2C%20Ps.%20Minggu%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012510!5e0!3m2!1sid!2sid!4v1676573475818!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="Nama Lengkap" />
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="email" placeholder="Email Aktif" />
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="number" placeholder="Nomor Telepon" />
                </div>
                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <?php
    require_once('footer.php');
    ?>

    <!-- Footer End -->


</body>

</html>