<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat komentar</title>
</head>
<body>
    <h3>Daftar Komentar</h3>
    <div class="daftar-komentar" style="border-top: 1px solid #ccc; margin-top: 20px; padding-top: 10px;">
        <?php
        if (file_exists("komentar.txt")) {
            $isi = file_get_contents("komentar.txt");
            echo nl2br(htmlspecialchars($isi)); // aman dari XSS
        } else {
            echo "Belum ada komentar.";
        }
        ?>
</div>
</body>
</html>