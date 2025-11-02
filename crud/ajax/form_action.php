<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

// Ambil data dari form
$id = stripslashes(strip_tags(htmlspecialchars($_POST['id'], ENT_QUOTES)));
$nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
$jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
$no_telp = stripslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES)));

// Jika ID kosong → data baru, maka lakukan INSERT
if ($id == "") {
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) 
              VALUES (:nama, :jenis_kelamin, :alamat, :no_telp)";
    $sql = $db1->prepare($query);
    $sql->bindParam(':nama', $nama);
    $sql->bindParam(':jenis_kelamin', $jenis_kelamin);
    $sql->bindParam(':alamat', $alamat);
    $sql->bindParam(':no_telp', $no_telp);
    $sql->execute();
} 
// Jika ID ada → data lama, maka lakukan UPDATE
else {
    $query = "UPDATE anggota 
              SET nama = :nama, jenis_kelamin = :jenis_kelamin, alamat = :alamat, no_telp = :no_telp 
              WHERE id = :id";
    $sql = $db1->prepare($query);
    $sql->bindParam(':nama', $nama);
    $sql->bindParam(':jenis_kelamin', $jenis_kelamin);
    $sql->bindParam(':alamat', $alamat);
    $sql->bindParam(':no_telp', $no_telp);
    $sql->bindParam(':id', $id, PDO::PARAM_INT);
    $sql->execute();
}

// Kirim respon JSON ke JavaScript
echo json_encode(['success' => 'Sukses']);

// Tutup koneksi
$db1 = null;
?>
