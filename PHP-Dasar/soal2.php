<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Cerita 2</title>
    <link rel="icon" type="img/png" href="gambar/icon.jpg" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307047">
    <meta name="author" content="Fadhil">
</head>
<body>
    <h1>Halaman PHP Fadhil</h1>
    <h2>Soal Cerita 2</h2>

<?php
    $totalUang = 1387500; // Total uang yang diambil Ani
    $uangtabungan = 1387500; // Total uang tabungan yg diambil Ani
    $pecahanUang = array(100000, 50000, 20000, 10000, 5000, 2000, 500); // Nilai pecahan uang yang berlaku
    $jumlahPecahan = array(); // Array untuk menyimpan jumlah pecahan uang

    // Menghitung jumlah masing-masing pecahan uang
    foreach ($pecahanUang as $nilai) {
        $jumlah = floor($totalUang / $nilai); // Menghitung jumlah pecahan
        $jumlahPecahan[$nilai] = $jumlah; // Menyimpan jumlah pecahan ke dalam array
        $totalUang -= $jumlah * $nilai; // Mengurangi total uang dengan nilai pecahan yang sudah dihitung
    }

    // Menampilkan hasil
    echo "Uang tabungan yang ingin diambil Ani sejumlah Rp. " . number_format($uangtabungan, 0, ',', '.') . "<br>";
    echo "Ani mendapatkan pecahan uang: <br>";
    foreach ($jumlahPecahan as $nilai => $jumlah) {
        echo "Rp. " . number_format($nilai, 0, ',', '.') . " = $jumlah lembar<br>";
    }
?>


</body>
</html>

