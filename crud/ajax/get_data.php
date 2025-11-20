<?php
// get_data.php
// pastikan file UTF-8 tanpa BOM
session_start();
include 'koneksi.php';
// jangan include csrf.php jika akan memblokir request tanpa header CSRF
// include 'csrf.php';

// set header JSON supaya browser/jQuery parse dengan benar
header('Content-Type: application/json; charset=utf-8');

// ambil id dengan aman
$id = isset($_POST['id']) ? (int) $_POST['id'] : 0;

if ($id <= 0) {
    echo json_encode([]);
    exit;
}

try {
    $query = "SELECT id, nama, jenis_kelamin, alamat, no_telp FROM anggota WHERE id = :id LIMIT 1";
    $stmt = $db1->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        // kirim data persis dengan key yang kita pakai di JS
        echo json_encode($row);
    } else {
        echo json_encode([]);
    }
} catch (Exception $e) {
    // jangan keluarkan error PHP mentah, kirim JSON kosong atau pesan yang aman
    echo json_encode([]);
}
$db1 = null;
?>
