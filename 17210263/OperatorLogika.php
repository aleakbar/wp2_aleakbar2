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
    $bil1 = 200;
    $bil2 = 30;
    $teks1 = "php";
    $teks2 = "php";

    $hasil = ($bil1<>$bil2) or ($teks1==$teks2);
    echo "$bil1<>$bil2 or $teks1==$teks2 adalah $hasil<br>";

    $hasil=!($teks1==$teks2);
    echo "($teks1==$teks2) adalah $hasil";
    ?>
</body>
</html>