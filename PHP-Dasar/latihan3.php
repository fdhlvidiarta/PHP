<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
    <link rel="icon" type="img/png" href="gambar/icon.jpg" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307047">
    <meta name="author" content="Fadhil">
</head>
<body>
    <h1>Halaman PHP Fadhil</h1>
    <h2>Latihan 3</h2>

<?php
    //aritmatika
    $x = 10;
    $y = 5;

    // variabel dalam php
    echo "Penambahan " .$x + $y. "<br>";
    echo "Pengurangan " .$x - $y. "<br>";
    echo "Perkalian " .$x * $y. "<br>";
    echo "Pembagian " .$x / $y. "<br>";
    echo "Modulus " .$x % $y. "<br>";
    echo "Exponensial " .$x ** $y. "<br>";
    echo ("<br>");

    //Assignment operators
    $x += 2; // $x = $x + 2
    $y *= 2; // $y = $y * 2
    echo "Penambahan x ". $x."<br>";
    echo "Perkalian y ".$y."<br>";
    echo("<br>");

    //Increment/Decrement operators
    echo "Isi ++x = ". ++$x. "<br>";
    echo "Isi x++ = ". $x++."<br>";
    echo "Isi x = ". $x."<br>";
    echo("<br>");
    echo "Isi -- y = ".--$y."<br>";
    echo "Isi -- y = ". $y--. "<br>";
    echo "Isi y = ". $y. "<br>";
    echo("<br>");

    //Conditional assignment operators
    $user = "Andi Darmawan";
    // <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
    $status = (empty($user)) ? "Kosong" : "Ada isi";
    echo $status. "<br>";
    // variable $color diisi dengan "red" jika $color tidak ada atau null
    echo $color = $color ?? "red";
?>

</body>
</html>