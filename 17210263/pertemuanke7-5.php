<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//Proses Penyeleksian Kondisi kode barang
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$jumbel = $_POST['jumbel'];


if ($kode=="B0001")
{
$judul="Ms. Access 2010";
$pengarang="Kurnia";
$harga=19500;}
else if ($kode=="B0002")
{
$judul="PHP & MySQL untuk orang awam";
$pengarang="M Irmansyah";
$harga=26500;}
else
{
$judul="Web Untuk Bisnis";
$pengarang="Kadir";
$harga=65000;}
//pemanggilan tanggal
$tanggal=date("d-M-Y");
//Proses Cetak
echo"STRUK PEMBELIAN BARANG SEDERHANA<br>";
echo"Tanggal        : $tanggal<br>";
echo"Nama 	        : $nama<br>";
echo"<hr><br>";
echo"Judul Buku		: $judul<br>";
echo"Pengarang		: $pengarang<br>";
echo"Harga buku		: Rp.$harga<br>";
echo"<hr><br>";
$tobay=$jumbel*$harga;
echo"Jumlah Beli	: $jumbel<br>";
echo"Total Bayar	: Rp.$tobay<br>";
echo"<hr><br>";
echo"<div align=center><a href=evaluasi.php>Tambah Data Penjualan</a></div>"; 
?>

</body>
</html>