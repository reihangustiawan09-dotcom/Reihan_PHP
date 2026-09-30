<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>PHP itu Mudah</title>
</head>

<body>
    <?php
    $uang_programmer = 1000;
    $laptop_gaming = 2000;
    $uang_koperasi = 4000;
    /* Operator && dan ||
    && semua kondisi harus bernilai benar => benar,
    || salah satu kondisi bernilai benar => benar
    */

    if (
        $uang_programmer > $laptop_gaming || $uang_koperasi >
        $laptop_gaming
    ) {
        echo 'sanggup dibeli oleh programmer';
    } else {
        echo 'uang gak cukup, nabung dulu sana' . "<br>";
    }
    ?>
</body>

</html>