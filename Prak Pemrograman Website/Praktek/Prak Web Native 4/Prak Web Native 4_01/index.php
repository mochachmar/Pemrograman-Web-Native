<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 5 - Contoh 4</title>
</head>
<body>
    <?php 
        $jurusan = "SI";
        switch($jurusan) {
            case "KA":
                echo "$jurusan = Komputerisasi Akuntansi";
                break;
            case "MI":
                echo "$jurusan = Manajemen Informatika";
                break;
            case "SI":
                echo "$jurusan = Sistem Informasi";
                break;
            case "TI":
                echo "$jurusan = Teknik Informatika";
                break;
            default:
                echo "$jurusan tidak terdaftar";
        }
    ?>
</body>
</html>