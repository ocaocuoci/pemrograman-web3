<?php
// Parameter koneksi PostgreSQL
$host = "localhost";     // atau IP server PostgreSQL
$port = "5432";          // port default PostgreSQL
$dbname = "phpdatabase";  // ganti dengan nama database kamu
$user = "postgres";      // username PostgreSQL (default: postgres)
$password = "1"; // ganti dengan password PostgreSQL kamu

$connect = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$connect) {
    die("Koneksi PostgreSQL gagal: " . pg_last_error());
} else {
    echo "Koneksi ke database PostgreSQL berhasil!<br>";
}
?>