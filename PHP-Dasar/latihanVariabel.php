<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Variabel</title>
    <link rel="icon" type="img/png" href="gambar/icon.jpg" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307047">
    <meta name="author" content="Fadhil">
</head>
<body>
    <h1>Halaman PHP Fadhil</h1>
    <h2>Latihan Variabel</h2>

<?php
    // Daftar nama-nama hari dalam seminggu
    $hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

    // Mendapatkan indeks hari ini (0 untuk Minggu, 1 untuk Senin
    $indeks_hari_ini = date("w");

    // Mendapatkan nama hari ini
    $hari_ini = $hari[$indeks_hari_ini];

    // Menampilkan kalimat "Hari ini hari <nama hari>"
    echo "Hari ini hari $hari_ini<br>";

    // Menampilkan semua nama hari
    echo "Semua hari dalam seminggu:<br>";
    foreach ($hari as $nama_hari) {
        echo "$nama_hari<br>";
    }
?>

</body>
</html>

