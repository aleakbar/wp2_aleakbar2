<html>
<head>
    <title>Input Data Mahasiswa</title>
</head>
<body bgcolor="green">
<form action="tampilanmahasiswa.php" method="post">
<b>Penegelolaan Data Mahasiswa</b>
<br>
<pre>
Nama : <input type="text" name="nama" size="25" maxlength="50">
Alamat : <input type="text" name="alamat" sieze="25" maxlength="50">
</pre>
Jenis Kelamin :
<input type="radio" name="jeniskel" value="laki-laki"> Laki - laki
<input type="radio" name="jeniskel" value="Perempuan"> perempuan
<p>
Pekerjaan :
<select name="pekerjaan">
<option value="-pilih-">
<option value="pelajar">pelajar
<option value="karyawan".>karyawan
<option value="wirausaha">wirausaha
<option value="Lain-lain">lain-lain
</select>
<p>
Hobi :
<input type="checkbox" name="hobi1" value="olahraga">olahraga
<input type="checkbox" name="hobi2" value="musik">musik
<input type="checkbox" name="hobi3" value="jalan-jalan">jalan-jalan
<p>
<input type="submit" value="kirim"><input type="reet" value="batal".
</form>
</body>
</html>