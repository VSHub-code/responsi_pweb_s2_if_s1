<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>komentar</title>
    <link rel="stylesheet" href="desain.css">
</head>
<body style="font-family: Verdana; background-color: antiquewhite;">
    <form id="feadback" action="kirim_komentar.php" method="post" style="text-align: center;">
        <div class="header">
            <h3>Kritik Saran dan Komentar</h3>
        </div>
        <div class="identitas">
           <input id="nama" name="nama" type="text" placeholder="nama..."><br>
        </div>
        <div class="komentar">
            <label for="komentar_baru"></label>
            <textarea name="komentar-baru" id="komentar-baru" rows="5" cols="50" placeholder="Kritik Saran dan Komentar..."></textarea>
        </div>
        <button id="kirim" value="submit">kirim</button>
    </form>

    <div class="daftar-komentar">
    <h3>Komentar Terbaru</h3>
    <?php
    if (file_exists("komentar.txt")) {
        $isi = file_get_contents("komentar.txt");

        $komentarArray = array_filter(array_map('trim',explode("--------------------", $isi)));

        $komentarTerakhir = array_slice($komentarArray, -3);

        foreach ($komentarTerakhir as $komentar) {
            echo "<div style='border: 1px solid #ccc; margin-bottom: 10px; padding: 10px; background-color: #f9f9f9;'>";
            echo nl2br(htmlspecialchars(trim($komentar)));
            echo "</div>";
        }
    } else {
        echo "<p>Belum ada komentar.</p>";
    }
    ?>
    </div>
</div>

    <script src="validasi_form.js"></script>
</body>
</html>