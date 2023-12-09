<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 5 - Latihan Do While</title>
</head>
<body>
    <?php 
        $i = 1;
        $jum = 0;
        do {
            $jum = $jum + $i;
            echo "Bilangan ke : $i, jumlah : $jum <br>";
            $i++;
        } while ($i <= 5);
    ?>
</body>
</html>