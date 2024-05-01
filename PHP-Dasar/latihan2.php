<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <link rel="icon" type="img/png" href="gambar/icon.jpg" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307047">
    <meta name="author" content="Fadhil">
</head>
<body>
    <h1>Halaman PHP Fadhil</h1>
    <h2>Latihan 2</h2>
    
<?php
    $txt = "Selamat datang !";
    $txt2 = "Politeknik Negeri Madiun";
    $x = 5;
    $y = 10.5;

    echo "<p>isi Variable txt adalah: $txt</p>" ;
    echo "<p>isi Variable x adalah: $x</p>" ;
    echo "<p>isi Variable y adalah: $y</p>" ;
    echo "Belajar PHP di " . $txt2 . "<br>";
    echo $x + $y;

    // PHP konstanta
    define("nama_konstanta", "{Fadhil V}");
    echo "<br>".nama_konstanta;
?>

</body>
</html>

