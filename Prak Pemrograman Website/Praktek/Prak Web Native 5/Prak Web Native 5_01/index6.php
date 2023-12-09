<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 6 - Latihan 2</title>
</head>
<body>
    <?php

    function bilangan_ganjil($number) {
        return $number % 2 !== 0;
    }

    $ganjil = [];
    for ($i = 1; $i <= 10; $i++) {
        if (bilangan_ganjil($i)) {
            $ganjil[] = $i;
        }
    }

    echo implode(', ', $ganjil) . PHP_EOL;
    echo "Jumlah bilangan ganjil antara 1-10 adalah : ada " . count($ganjil) . " bilangan";

    ?>
</body>
</html>