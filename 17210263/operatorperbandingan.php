<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Perbandingan</title>
</head>
<body>
<?php
    $bil1 = 200;
    $bil2 = 40;
    $teks1 = "PHP";
    $teks2 = "php";
    $hasil=$bil1==$bil2;
    echo "$bil1 == $bil2 = $hasil<br>";
    $hasil=$bil1 != $bil2;
    echo "$bil1 != $bil2 = $hasil<br>";
    $hasil=$bil1 >= $bil2;
    echo "$bil1 >= $bil2 = $hasil<br>";
    $hasil = $teks1 == $teks2;
    echo "$teks1 == $teks2 = $hasil<br>";
    $hasil = $teks1 != $teks2;
    echo "$teks1 != $teks2 = $hasil<br>";
    ?>    
</body>
</html>