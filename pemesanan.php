<?php
ob_start();
include 'function.php';

if (isset($_POST['submit'])) {

    //ambil 1 id terbesar dikolom id_pendaftaran, lalu ambil 5 karakter dari sebelah kanan
    $getMaxId = mysqli_query($koneksi, "SELECT MAX(RIGHT(id_pemesanan, 5)) AS id FROM tb_pemesanan");
    $d = mysqli_fetch_object($getMaxId);
    $generateId = 'P' . date('Y') . sprintf("%05s", $d->id + 1);

    //proses insert
    $insert = mysqli_query($koneksi, "INSERT INTO tb_pemesanan VALUES (
'" . $generateId . "',
'" . $_POST['rasa'] . "',
'" . $_POST['nm'] . "',
'" . $_POST['no_tlp'] . "',
'" . $_POST['tgl_order'] . "',
'" . $_POST['mp'] . "',
'" . $_POST['jml'] . "'
)");

    if ($insert) {
        echo '<script>window.location="berhasil_pesan.php?id=' . $generateId . '"</script>';
    } else {
        echo 'huft ' . mysqli_error($koneksi);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        .container label {
            margin-bottom: 8px;
            margin-top: 8px;
        }

        .container button {
            width: 100%;
        }

        .container .judul {
            font-size: 2rem;
            font-weight: 700;
            color: #ffffff;
            font-style: italic;
            color: #b6895b;
        }

        .container .judul span {
            color: #b6895b;
        }
    </style>
</head>

<body>
    <!-- judul -->
    <div class="container text-center">
        <div class="judul">
            Bedugul <span>Coffee</span>
        </div>
        <h3>Form Pemesanan</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, tempora. Ad dignissimos, at ipsam maiores facere dolor obcaecati tempore quo saepe pariatur provident, reiciendis minima? Aperiam odit perferendis doloremque quam debitis accusamus excepturi dolore facilis consectetur cumque obcaecati nam, molestias voluptates incidunt architecto officiis magnam quasi consequuntur voluptatem eligendi labore?</p>
    </div>

    <!-- end judul -->

    <div class="container">
        <!--bagian box formulir -->
        <form action="" method="POST">
            <div class="row">

                <div class="col-6">
                    <div class="mb-3">

                        <label for="rasa">Pilih Jenis Kopi</label>

                        <select class="form-select form-select-md border-success" aria-label=".form-select-sm example" name="rasa">
                            <option selected>Open this select menu</option>
                            <option value="kopi hitam">Kopi Hitam</option>
                            <option value="kopi susu">Kopi Susu</option>
                            <option value="kopi jahe">Kopi Jahe</option>
                            <option value="kopi hitam">Kopi Hitam</option>
                            <option value="kopi susu">Kopi Susu</option>
                            <option value="kopi jahe">Kopi Jahe</option>
                            <option value="susu jahe">susu jahe</option>
                            <option value="teh manis">teh manis</option>
                            <option value="air putih sehat">Air Putih sehat</option>
                        </select>

                        <label for="nama_lengkap" class="form-label">Nama Lengkap :</label>

                        <input type="text" class="form-control border-success" id="th_produksi" aria-describedby="nm" name="nm">

                        <label for="no_tlp" class="form-label">Nomor Telepon :</label>

                        <input type="text" class="form-control border-success" id="no_tlp" aria-describedby="nm" name="no_tlp">

                        <label for="tgl_order" class="form-label">Tanggal Order : </label>

                        <input type="date" class="form-control border-success" id="tgl_order" aria-describedby="tgl_order" name="tgl_order">
                    </div>

                </div>

                <div class="col-6">
                    <label for="mp">Pilih Metode Pembayaran : </label>

                    <select class="form-select form-select-md border-success" aria-label=".form-select-sm example" name="mp">
                        <option selected>Open this select menu</option>
                        <option value="Transfer BANK">Transfer BANK</option>
                        <option value="Cash">Cash</option>
                    </select>

                    <label for="jml">Pilih Jumlah Pesanan : </label>

                    <select class="form-select form-select-md border-success" aria-label=".form-select-sm example" name="jml">
                        <option selected>Open this select menu</option>
                        <option value="1 Cup">1 Cup</option>
                        <option value="2 Cup">2 Cup</option>
                        <option value="3 Cup">3 Cup</option>
                        <option value="4 Cup">4 Cup</option>
                        <option value="5 Cup">5 Cup</option>
                        <option value="6 Cup">6 Cup</option>
                        <option value="7 Cup">7 Cup</option>
                        <option value="8 Cup">8 Cup</option>
                        <option value="9 Cup">9 Cup</option>
                        <option value="10 Cup">10 Cup</option>

                    </select>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-0" name="submit">Buat Pesanan</button>
                </div>

            </div>
        </form>
    </div>

    <!-- <?php
            function alertWindow($msg)
            {
                echo "<script type ='text/JavaScript'>";
                echo "alert('$msg')";
                echo "</script>";
            }
            alertWindow("Belajar PHP Bersama Codekey! ");
            ?> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>