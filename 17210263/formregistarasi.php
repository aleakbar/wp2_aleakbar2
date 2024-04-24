<html>
<head>
    <title> Form Registrasi </title>
</head>
<body>
<form action ="dataregistrasi.php" method="post">    
<b> FORM REGISTRASI </b>
<br>
<pre>
Isi Data Dibawah ini :
Nama         :<input type="text" name="nama" size="25" maxlenght="50">
Alamat       :<textarea name="alamat" rows="5" cols="40"></textarea>
Tempat Lahir :<input type="text" name="tlahir" size="25" maxlenght="50">
Tanggal lahir:<input type="text" name="tgllahir" size="25" maxlenght="50">
</pre>
Jenis Kelamin :
<input type="radio" name="jeniskel" value="Laki-Laki"> Laki-Laki
<input type="radio" name="jeniskel" value="Perempuan"> Perempuan
<p>
    Pendidikan:
    <select name="pendidikan">
        <option value="-Pilih-">
        <option value="s1">S1
        <option value="s2">S2
        <option value="s3">S3
    </select>        
<p>
<pre>    
Kursus = <input type="text" name="kursus" size="25" maxlenght="50"><br>
Biaya  = <input type="text" name="biaya" size="25" maxlenght="50"><br>
</pre> 
<input type="submit" value= "Submit"><input type="reset" value="Cancel">
</form>
</body>
</html>