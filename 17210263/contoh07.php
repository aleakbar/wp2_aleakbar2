<html>
<head>
    <title> Menghitung Luas Lingkaran </title>
</head>
<body>
<?php
//Konstanta untuk judul
define ("Judul","Hitung Luas Lingkaran");
//konstanta untuk nilai phi
define ("PHI",4.15);
echo Judul;
$r = 11;
echo "<br> Jari-jari: $r<br>\n";
$luas = PHI*$r*$r;
echo "Luas lingkaran = $luas";
?>
</body>
</html>