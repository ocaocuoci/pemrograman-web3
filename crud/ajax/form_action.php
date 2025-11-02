<?php
    session_start();

    include 'koneksi.php';
    incude 'csrf.php';

    $nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
    $jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
    $alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
    $no_telp = stripslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES)));

    $query = "INSERT INTO anggota (nama. jenis_kelamin, alamat, no_telp) VALUES (:nama, :jenis_kelamin, :alamat, :no_telp)";
    $sql = $db1->prepare($squery);
    $sql->bindParan(':nama', $nama);
    $sql->bindParan(':jeni_kelamin', $jenis_kelamin);
    $sql->bindParan(':alamat', $alamat);
    $sql->bindParan(':no_telp', $no_telp);

    echo json_encode(['succes' => 'Sukses']);

    $db1 = null;
?>