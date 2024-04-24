<?php
    session_start();

    include "../koneksi.php";

    $judul      = $_POST['judul'];
    $penulis    = $_POST['penulis'];
    $tanggal    = $_POST['tanggal'];
    $isiberita  = $_POST['isiberita'];
   
    $tambahberita  =mysqli_query($varkoneksi,"insert into tbl_berita (judul,penulis,tanggal,isiberita) values ('$judul','$penulis','$tanggal','$isiberita')");

    header("location:../index.php?halaman=berita");
?>