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
    <h1>Halaman PHP Fadhil</h1>
    <h2>Latihan 6</h2>

<?php
    // white loop
    $x = 10;
    while ($x > 5) {
        echo "Nomor : $x <br>";
        $x--;
    }

    echo "--------------<br>";
    // do while
    $x = 1;
    do {
        echo "Nomor : $x <br>";
        $x++;
    } while ($x <= 5);

    echo "--------------<br>";
    // foreach
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
    echo "$value <br>";
    }

    echo "--------------<br>";
    // for
    for ($x = 0; $x <= 10; $x++) {
        echo "Nomor : $x <br>";
    }

    echo "--------------<br>";
    // for dengan break
    for ($x = 0; $x <10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "Nomor: $x <br>";
    }
?>

</body>
</html>








