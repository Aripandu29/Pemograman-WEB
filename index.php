<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];

$entry = "$nama|$email|$komentar\n";

$file = 'buku_tamu.txt';
if (file_put_contents($file, $entry, FILE_APPEND | LOCK_EX) !== false) {
    echo "Data berhasil disimpan.";
} else {
    echo "Gagal menyimpan data.";
}
?>
