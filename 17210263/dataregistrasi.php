<html>
<head>
    <title> Data Registrasi </title>
</head>
<body>
<?php
$nama = $_POST['nama'];
$alamat=$_POST['alamat'];
$tlahir=$_POST['tlahir'];
$tgllahir=$_POST['tgllahir'];
$jeniskel=$_POST['jeniskel'];
$pendidikan=$_POST['pendidikan'];
$kursus=$_POST['kursus'];
$biaya=$_POST['biaya'];
$total=$kursus*$biaya;
?>
<table border=1>
<tr>
<td colspan=2 align="center"><b>Data Registrasi</b></td>
</tr>
<tr>
<td>Nama</td><td><?php echo $nama;?></td>
</tr>
<td>Alamat</td><td><?php echo $alamat;?></td>
</tr>
<td>Tempat Lahir</td><td><?php echo $tlahir;?></td>
</tr>
<td>Tanggal Lahir</td><td><?php echo $tgllahir;?></td>
</tr>
<td>Jenis Kelamin</td><td><?php echo $jeniskel;?></td>
</tr>
<td>Pendidikan</td><td><?php echo $pendidikan;?></td>
</tr>
<td>Total</td><td><?php echo $total;?></td>
</tr></table>
<a href="formregistrasi.php"> INPUT DATA LAGI</a>
</body>
</html>