<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 7</title>
    <link rel="icon" type="img/png" href="gambar/icon.jpg" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307047">
    <meta name="author" content="Fadhil">
</head>
<body>
    <h1>Halaman PHP Fadhil</h1>
    <h2>Latihan 7</h2>

<?php
    $namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
    echo "saya suka " . $namaBuah[0] . ", ". $namaBuah[1] . " dan " . $namaBuah[2] . ".<br>";

    // tampikan Mangga
    echo "saya suka " . $namaBuah[1] . ".<br>" ;
    // tampikan Jeruk
    echo "saya suka " . $namaBuah[2] . ".<br>" ;
    // tampikon Apel
    echo "saya suka " . $namaBuah[3] . ".<br>" ;
    // tampikon Melon
    echo "saya suka " . $namaBuah[4] . ".<br>" ;

    // orray dengan spesifik index
    $umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"38 Tahun");
    $umur['Ahmad']="50 Tahun.";
    echo "<b>Umur Andi adalah</b> " . $umur['Andi'] ."," ;

    // tampikon semua umur
    echo "<b>Umur Ben adalah</b> " . $umur['Ben']. " ,";
    echo "<b>Umur Joe adalah</b> " . $umur['Joe']. " ,". " dan ";
    echo "<b>Umur Ahmad adalah</b> " . $umur['Ahmad'];
?>

</body>
</html>








