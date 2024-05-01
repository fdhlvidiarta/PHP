<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Konversi Nilai</title>
    <link rel="icon" type="img/png" href="gambar/icon.jpg" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307047">
    <meta name="author" content="Fadhil">
</head>
<body>
    <h1>Halaman PHP Fadhil</h1>
    <h2>Konversi Nilai</h2>
    
<?php
   function konversiNilaiKeHuruf($nilaiAngka)
    { if ($nilaiAngka >= 90 && $nilaiAngka <= 100) { 
        return "A"; } 
    elseif ($nilaiAngka >= 80 && $nilaiAngka < 90) {
        return "AB"; } 
    elseif ($nilaiAngka >= 70 && $nilaiAngka< 80) { 
        return "B"; }
    elseif ($nilaiAngka >= 60 && $nilaiAngka < 70) { 
        return "BC"; } 
    elseif ($nilaiAngka >= 0 && $nilaiAngka < 60) { 
        return "C"; }
    else { 
        return "Nilai Tidak Tercantum";
        } 
    }
    $nilaiAngka = 85;
    $hurufNilai = konversiNilaiKeHuruf($nilaiAngka);
    echo "Konversi Nilai: $nilaiAngka untuk nilai huruf yaitu $hurufNilai";
?>

</body>
</html>

