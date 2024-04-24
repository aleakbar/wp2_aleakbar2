<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
		$teks1 =" Belajar Menghitung";
		$teks2 =" Volume kubus";
		$teks3 =" cm3";
		$teks4 =" Panjang sisi";
		$teks5 =" Bersama Ale";
		$hasil = $teks1 . $teks2 . $teks5;
echo "<big><b> $hasil<br><br> </big></b>";
		$r=15;
		$volume= $r**3; 
echo "$teks4 = $r <br><br>";
echo "$teks2 = sisi x sisi x sisi = $volume $teks3";
?>
</body>
</html>