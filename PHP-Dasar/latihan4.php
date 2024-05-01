<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
    <link rel="icon" type="img/png" href="gambar/icon.jpg" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307047">
    <meta name="author" content="Fadhil">
</head>
<body>
    <h1>Halaman PHP Fadhil</h1>
    <h2>Latihan 4</h2>

<?php
/* OPERATOR LOGIKA YG BISA DIGUNAKAN

    * == Sama Dengan
    * === Identical
    * != Tidak sama dengan
    * <> Tidak sama dengan
    * !== Not identicol
    * > Lebih Besar dari
    * < Lebih kecil dari
    * >= Lebih Besar atau Sama dengan
    * <= Kurang dari atau Sama dengan
    * <=> Spaceship $x <=> $y
*/ 

    $t = date(format:"H"); // mendapatkan jam dengan format 1-24
    echo "If";
    if ($t < 16) {
    echo " Selamat siang!";
    }

    $t = date(format: "H"); // mendapatkan jam dengan format 1-24
    echo "<br> If dan Else <br>";
    if  ($t < 20) {
    echo "Selamat siang!";
    } else {
    echo "Selamat malam!";
    }

    echo "<br> Nested If <br>";
    if ($t < 12) {
    echo "Selamat Pagi!";
    } elseif ($t < 16) {
    echo "Selamat sore!";
    } else {
        echo "Selamat malam!";
    }

?>

</body>
</html>


