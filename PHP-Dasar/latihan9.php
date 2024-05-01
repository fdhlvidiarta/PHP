<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6</title>
    <link rel="icon" type="img/png" href="gambar/icon.jpg" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307047">
    <meta name="author" content="Fadhil">
</head>
<body>
    <h1>
    Halaman PHP Fadhil
    </h1>
    <h2>Latihan 9</h2>

<?php
    // Contoh fungsi
    function writeMsg($nama) {
        echo "Selamat datang ". $nama." <br>";
    }
    writeMsg( nama: "Fadhil"); // pemanggilan fungsi

    // fungsi dengan mengirim nilai balik
    function tambah(int $angka1, int $angka2) {
    $a= $angka1+$angka2;
    return $a; // mengirim nilai $a ke pemanggil
    }
    
    $hasil=tambah( angka1: 9, angka2: 90);
    echo ($hasil);
?>

</body>
</html>








