<?php
    ob_start();
    session_start();
    ob_end_clean();


    $namapengguna   = $_POST['pengguna'];
    $kuncipengguna  = $_POST['katakunci'];

    if($namapengguna=="ale" AND $kuncipengguna=="ale123")
    {
        $_SESSION["pengguna"]=$namapengguna;
        header("location:index.php");
    }else{
        header("location:index.php?gagal");
    }

?>