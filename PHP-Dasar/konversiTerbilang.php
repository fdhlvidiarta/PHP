<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan konversi Terbilang</title>
    <link rel="icon" type="img/png" href="gambar/icon.jpg" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307047">
    <meta name="author" content="Fadhil">
</head>
<body>
    <h1>Halaman PHP Fadhil</h1>
    <h2>Konversi Nilai Terbilang</h2>
    <form action="" method="post">
        <label for="angka">Masukkan angka (1-9): </label>
        <input type="number" id="angka" name="angka" min="1" max="9" required>
        <button type="submit" name="submit">Konversi</button>
    </form>
    
<?php
    if (isset($_POST['submit'])) {
        $angka = $_POST['angka'];
        $terbilang = "";

        switch ($angka) {
            case 1:
                $terbilang = "satu";
                break;
            case 2:
                $terbilang = "dua";
                break;
            case 3:
                $terbilang = "tiga";
                break;
            case 4:
                $terbilang = "empat";
                break;
            case 5:
                $terbilang = "lima";
                break;
            case 6:
                $terbilang = "enam";
                break;
            case 7:
                $terbilang = "tujuh";
                break;
            case 8:
                $terbilang = "delapan";
                break;
            case 9:
                $terbilang = "sembilan";
                break;
            default:
                $terbilang = "Angka tidak valid";
        }
        echo "<p>Terbilang: $terbilang</p>";
    }
?>

</body>
</html>

