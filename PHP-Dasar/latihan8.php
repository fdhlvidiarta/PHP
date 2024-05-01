<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 8</title>
    <link rel="icon" type="img/png" href="gambar/icon.jpg" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307047">
    <meta name="author" content="Fadhil">
</head>
<body>
    <h1>Halaman PHP Fadhil</h1>
    <h2>Latihan 8</h2>

<?php
    // menampilkan data kelas dengan array 2 dimensi
    $array = array(
    "1C" =>array("Udin", "Ismail", "Adi"),
    "1D" =>array("Lukman", "Fajri", "Mahmud")
    );

    // menampilkan data array
    print_r($array);
    // menapilkan kelas 1C
    print_r($array['1C']);
    // menampilkan kelas 1d dengan index 0
    echo $array['1D' ][0]. ", ";
    // tampilkan fajri
    echo $array['1D' ][1]. ", ";
    // tampilkan andi
    echo $array['1C' ][2]. ".";

    // data kelas bisa dituliis juga dengan
    $array_simple = [
    "1C" =>["Udin", "Ismail", "Adi"],
    "1D" =>["Lukman", "Fajri", "Mahmud"]
    ];

?>

</body>
</html>








