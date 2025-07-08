<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $komentar = trim($_POST["komentar-baru"] ?? "");

    if ($nama !== "" && $komentar !== "") {
        $baris = "Nama: ".htmlspecialchars($nama) . "\nKomentar: ".htmlspecialchars($komentar) . "\n---\n";

        file_put_contents("komentar.txt", $baris, FILE_APPEND | LOCK_EX);

        echo '<div style="text-align:center"; >Komentar berhasil disimpan </div>';
    } else {
        echo '<div style="text-align:center"; >"Nama dan komentar tidak boleh kosong!" </div>';
    }
} else {
    echo "Metode tidak valid.";
}
?>
