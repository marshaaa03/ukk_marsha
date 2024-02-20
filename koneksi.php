<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "kasir";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$koneksi = mysqli_connect("$server", "$username", "$password", "$db");
// mengecek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($koneksi);
?>