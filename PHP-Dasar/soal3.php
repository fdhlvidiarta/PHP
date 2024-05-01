<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
    <link rel="icon" type="img/png" href="gambar/icon.jpg" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307047">
    <meta name="author" content="Fadhil">
    <style>
        table {
        width: 21%;
        border-collapse: collapse;
        }
        th, td {
        border: 1px solid black;
        padding: 4px;
        text-align: center;
    }
    </style>
</head>
<body>
    <h1>
    Halaman PHP Fadhil
    </h1>
    <h2>Soal Cerita 3</h2>
    <table>
    <thead>
        <tr>
            <th>No Urut</th>
            <th>Poin</th>
            <th>Siswa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>75</td>
            <td>Adi</td>
        </tr>
        <tr>
            <td>2</td>
            <td>80</td>
            <td>Joni</td>
        </tr>
        <tr>
            <td>3</td>
            <td>65</td>
            <td>Jihan</td>
        </tr>
        <tr>
            <td>4</td>
            <td>70</td>
            <td>Aya</td>
        </tr>
        <tr>
            <td>5</td>
            <td>85</td>
            <td>Ita</td>
        </tr>
        <tr>
            <td>6</td>
            <td>90</td>
            <td>Budi</td>
        </tr>
        <tr>
            <td>7</td>
            <td>95</td>
            <td>Tini</td>
        </tr>
        <tr>
            <td>8</td>
            <td>65</td>
            <td>Sari</td>
        </tr>
    </tbody>
</table>
<br>

<?php
    $siswa = array(
        array("no" => 1, "nama" => "Adi", "poin" => 75),
        array("no" => 2, "nama" => "Joni", "poin" => 80),
        array("no" => 3, "nama" => "Jihan", "poin" => 65),
        array("no" => 4, "nama" => "Aya", "poin" => 70),
        array("no" => 5, "nama" => "Ita", "poin" => 85),
        array("no" => 6, "nama" => "Budi", "poin" => 90),
        array("no" => 7, "nama" => "Tini", "poin" => 95),
        array("no" => 8, "nama" => "Sari", "poin" => 65)
    );

    // a) Tampilkan poin siswa dengan nomor urut 5
    foreach ($siswa as $s) {
        if ($s["no"] == 5) {
            echo "a) Poin siswa dengan nomor urut 5 adalah : " . $s["poin"] . "<br>";
        }
    }

    // b) Tampilkan semua nama siswa yang memiliki poin 90
    foreach ($siswa as $s) {
        if ($s["poin"] == 90) {
            echo "b) Nama siswa yang memiliki poin 90 adalah : " . $s["nama"] . "<br>";
        }
    }

    // c) Tampilkan semua nama siswa yang memiliki poin 100 
    foreach ($siswa as $s) {
        if ($s["poin"] == 100) {
            echo "Nama siswa yang memiliki poin 100 adalah : " . $s["nama"] . "<br>";
        }
    }
    echo "c) Hasil: tidak ada";
?>

</body>
</html>

