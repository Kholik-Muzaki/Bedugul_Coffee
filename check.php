<?php
ob_start();
    SESSION_START();
    require "function.php";
    $x = $_GET["x"];
    $id=$_GET["id"];
    $username=query(" SELECT User from datakopi WHERE id='$id';");
    $username2=$_SESSION["Login"];
    if($username[0]['User']==$username2 && $x=='edit'){
        header("Location:update.php?id=$id");
    }else{
        echo "
                <script>
                    alert ('Data hanya bisa diedit oleh User yang Menginputnya.');
                    document.location.href= 'index.php';
                </script>
            ";
    }
    
    
    if($username[0]['User']==$username2 && $x=='delete'){
        header("Location:remove.php?id=$id");
    }else{
        echo "
                <script>
                    alert ('Data hanya bisa dihapus oleh User yang Menginputnya.');
                    document.location.href= 'index.php';
                </script>
            ";
    }
    
    
?>