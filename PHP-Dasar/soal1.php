<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
    <link rel="icon" type="img/png" href="gambar/icon.jpg" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307047">
    <meta name="author" content="Fadhil">
</head>
<body>
    <h1>Halaman PHP Fadhil</h1>
    <h2>Soal Cerita 1</h2>
    <p>Setiap bulan, Gaji pokok yang diterima Obi sebesar Rp. 3.250.000,-, tunjangan
    jabatan sebesar Rp. 1.200.000,- dan pajaknya penghasilan sebesar 10% 
    dihitung dari gaji kotor (gaji kotor = gaji pokok + tunjangan). Buatlah kode 
    PHP untuk menghitung gaji bersih yang diterima Obi setiap bulannya.
    </p>

<?php
    $gajiPokok = 3250000; 
    $tunjanganJabatan = 1200000; 
    $pajakPenghasilan = 0.10; // Persentase pajak penghasilan

    // Menghitung gaji kotor
    $gajiKotor = $gajiPokok + $tunjanganJabatan;

    // Menghitung pajak penghasilan
    $pajak = $pajakPenghasilan * $gajiKotor;

    // Menghitung gaji bersih
    $gajiBersih = $gajiKotor - $pajak;

    // Menampilkan hasil dengan rincian
    echo "Gaji Pokok Obi: Rp. " . number_format($gajiPokok, 0, ',', '.') . "<br>";
    echo "Tunjangan Jabatan Obi: Rp. " . number_format($tunjanganJabatan, 0, ',', '.') . "<br>";
    echo "----------------------------------------------- +<br>";
    echo "Gaji Kotor Obi: Rp. " . number_format($gajiKotor, 0, ',', '.') . "<br>";
    echo "Pajak Penghasilan <br>(10% dari gaji kotor): Rp. " . number_format($pajak, 0, ',', '.') . "<br>";
    echo "----------------------------------------------- -<br>";
    echo "Jadi Gaji Bersih Obi: Rp. " . number_format($gajiBersih, 0, ',', '.') ;
?>

</body>
</html>

