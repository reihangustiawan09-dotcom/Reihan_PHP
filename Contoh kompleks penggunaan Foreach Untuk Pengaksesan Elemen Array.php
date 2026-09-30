<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <?php
    //variabel pada php
    $nama = "Multi Dimensi Array";
    //akses nilai pada variabel
    echo "Selamat datang di $nama <br>";
    // ---------- Single Dimensi Array ---------
    $mahasiswa = [
        'Thalia',
        'Daniel',
        'Rico',
        'Cindy',
        'Barney'
    ];
    //print keseluruhan nilai dari array
    foreach ($mahasiswa as $x) {
        echo $x . "<br>";
    }
    ?>
</body>