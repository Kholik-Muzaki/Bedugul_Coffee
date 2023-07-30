<?php
ob_start();
require 'function.php';

$id = $_GET["id"];

if (remove($id)>0) {
    echo "
            <script>
                alert ('data berhasil di hapus');
                document.location.href= 'beans.php';
            </script>
        ";
} else {
    echo "
            <script>
            alert ('data gagal di hapus');
            document.location.href= 'beans.php';
            </script>
        ";

}
?>