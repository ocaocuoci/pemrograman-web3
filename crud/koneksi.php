<?php
$koneksi = pg_connect("host=localhost port=5432 dbname=phpdatabase user=postgres password=1");

if (!$koneksi) {
    die("Koneksi gagal: " . pg_last_error());
}
pg_set_client_encoding($koneksi, "UTF8");
?>
