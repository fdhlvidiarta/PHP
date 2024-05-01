<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan 2</title>
    <link rel="icon" type="img/png" href="gambar/icon.jpg" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307047">
    <meta name="author" content="Fadhil">
</head>
<body>
    <h1>Halaman PHP Fadhil</h1>
    <h2>Latihan Perulangan 2</h2>

<?php $angka = array(12,13,15,16,67,189,346,876,54232,3256);
    foreach($angka as $a){
        if($a % 2 == 0){
            echo "Nomor: $a Genap<br>"; // Jika ingin angkanya GENAP diubah GANJIL ganti saja kalimatnya
        } else {
            echo "Nomor: $a Ganjil<br>"; // Demikian juga jika ingin angkanya GANJIL diubah GENAP ganti saja kalimatnya
        }
    }
    
?>

</body>
</html>
