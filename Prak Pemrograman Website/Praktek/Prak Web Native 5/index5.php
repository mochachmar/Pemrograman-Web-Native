<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 6 - Latihan 2 No.1</title>
</head>
<body>
    <?php
        // Output: Tidak ada output
        // Fungsi: Membuat array asosiatif $arr dgn 2 elemen: "foo" yg punya nilai "bar" dan indeks 12 yang punya nilai true
        $arr = array("foo" => "bar", 12 => true);

        // Output: "bar"
        // Fungsi: Menampilkan nilai dengan kunci "foo" dari array $arr, jadi outputnya adalah "bar"
        echo $arr["foo"];

        
        // Output: 1 
        // Fungsi: Menampilkan nilai yg terkait dgn indeks 12 dari array $arr, jadi outputnya true atau 1.
        echo $arr[12];
    ?>
</body>
</html>

