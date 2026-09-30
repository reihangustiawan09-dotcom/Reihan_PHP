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
    $uang_programmer = 7000;
    $laptop_gaming = 6000;
    $uang_koperasi = 4000;
    if ($uang_programmer > $laptop_gaming) {
        echo 'sanggup dibeli oleh wahyu';
    } else if ($uang_koperasi > $laptop_gaming) {
        echo 'sanggup dibeli oleh koperasi' . "<br>";

        if ($uang_koperasi >= $laptop_gaming * 2)
            echo 'laptop yang sanggup terbeli ada dua' . "<br>";
    } else {
        echo 'uang gak cukup, nabung dulu sana' . "<br>";
    }
    ?>
</body>

</html>