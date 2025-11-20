<?php
session_start();

if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../function/pesan_kilat.php';
    require '../function/anti_injection.php';
    
    // Ensure we have an id to delete
    if (!empty($_GET['id'])) {
        $id = anti_injection($koneksi, $_GET['id']); // sanitize input (per your helper)

        // Build the delete query
        $query = "DELETE FROM jabatan WHERE id = '$id'";

        // Execute and respond
        if (pg_query($koneksi, $query)) {
            pesan('success', 'Jabatan Telah Dihapus.');
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . pg_error($koneksi));
        }

        header("Location: ../index.php?page=jabatan");
        exit;
    } elseif (!empty($_GET['anggota'])) {
        $id = anti_injection($koneksi, $_GET['id']);

        // 1) Hapus akun user
        $sqlUser  = 'DELETE FROM "user" WHERE id = $1';
        $resUser  = pg_query_params($koneksi, $sqlUser, [$id]);

        if ($resUser) {
            // 2) Lalu hapus data anggota yang merujuk user_id tsb
            $pgAnggota = 'DELETE FROM anggota WHERE user_id = $1';
            $resAnggota = pg_query_params($koneksi, $pgAnggota, [$id]);

            if ($resAnggota) {
                pesan('success', 'Anggota Telah Terhapus.');
            } else {
                pesan('warning', 'Data Login Terhapus Tetapi Data Anggota Tidak Terhapus Karena: ' . pg_last_error($koneksi));
            }
        } else {
            pesan('danger', 'Anggota Tidak Terhapus Karena: ' . pg_last_error($koneksi));
        }

        header('Location: ../index.php?page=anggota');
        exit;
    }
}
