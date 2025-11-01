<?php
$host = 'localhost';
$port = '5432';
$dbname = 'phpdatabase';
$user = 'postgres';
$pass = '1';

$connect = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");

if (!$connect) {
    die('Koneksi gagal: ' . pg_last_error());
}

pg_set_client_encoding($connect, 'UTF8');
?>
