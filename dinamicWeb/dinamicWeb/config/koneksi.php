<?php
date_default_timezone_set("Asia/Jakarta");

$host = "localhost";
$dbname = "db_pemrogweb";
$user = "postgres";
$pass = "1";

$conn_string = "host=$host dbname=$dbname user=$user password=$pass";
$koneksi = pg_connect($conn_string);

if (!$koneksi) {
    die("Koneksi database gagal: " . pg_last_error());
}
?>
