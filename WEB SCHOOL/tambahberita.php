<?php
    //mulai session
    session_start();

    //cek status sudah login
    if($_SESSION['status']!="login")
    {
        header("location:index.php?halaman=login");
    }

    // koneksi ke database
    include "koneksi.php";

    // Fetch semua data user dari database
    $result = mysqli_query($varkoneksi, "SELECT * FROM tbl_pengguna ORDER BY idpengguna ASC");
?>



<h2>Halaman Tambah Berita</h2>
<a href="halaman/logout.php">LOGOUT</a>
<form method="POST" action="halaman/tambahberita_aksi.php">
    <table>
        <tr>
            <td width="100px">Judul Berita</td>
            <td width="400px"><input type="text" name="judul" placeholder="Masukan Judul Berita"></td>
        </tr>

        <tr>
            <td>Penulis</td>
            <td><input type="text" name="penulis" placeholder="Masukan Nama Penulis"></td>
        </tr>

        <tr>
            <td>Tanggal</td>
            <td><input type="date" name="tanggal"></td>
        </tr>

        <tr>
            <td>Isi Berita</td>
            <td>
                <textarea name="isiberita">
                        
                </textarea>
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="tomboltambah" value="Tambah Berita"></td>
        </tr>
    </table>
</form>