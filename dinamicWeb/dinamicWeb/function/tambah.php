<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';      // $koneksi = pg_connect(...)
    require '../function/pesan_kilat.php';
    require '../function/anti_injection.php';

    // ===== Tambah JABATAN =====
    if (!empty($_GET['jabatan'])) {
        $jabatan    = anti_injection($koneksi, $_POST['jabatan']);
        $keterangan = anti_injection($koneksi, $_POST['keterangan']);

        // parameterized query (aman)
        $sql    = 'INSERT INTO jabatan (jabatan, keterangan) VALUES ($1, $2)';
        $result = pg_query_params($koneksi, $sql, [$jabatan, $keterangan]);

        if ($result) {
            pesan('success', 'Jabatan Baru Ditambahkan.');
        } else {
            pesan('danger', 'Menambahkan Jabatan Gagal Karena: ' . pg_last_error($koneksi));
        }

        header('Location: ../index.php?page=jabatan');
        exit;
    }
    // ===== Tambah ANGGOTA =====
    elseif (!empty($_GET['anggota'])) {
        $username      = anti_injection($koneksi, $_POST['username']);
        $password      = anti_injection($koneksi, $_POST['password']);
        $level         = anti_injection($koneksi, $_POST['level']);
        $jabatan       = anti_injection($koneksi, $_POST['jabatan']);
        $nama          = anti_injection($koneksi, $_POST['nama']);
        $jenis_kelamin = anti_injection($koneksi, $_POST['jenis_kelamin']);
        $alamat        = anti_injection($koneksi, $_POST['alamat']);
        $no_telp       = anti_injection($koneksi, $_POST['no_telp']);

        // hash password: salt + password
        $salt              = bin2hex(random_bytes(16));
        $combined_password = $salt . $password;
        $hashed_password   = password_hash($combined_password, PASSWORD_BCRYPT);

        // 1) insert ke tabel "user" dan ambil id dengan RETURNING
        $sqlUser = 'INSERT INTO "user" (username, password, salt, level)
                    VALUES ($1, $2, $3, $4) RETURNING id';
        $resUser = pg_query_params($koneksi, $sqlUser, [$username, $hashed_password, $salt, $level]);

        if ($resUser) {
            $rowUser = pg_fetch_assoc($resUser);
            $user_id = $rowUser['id'];

            // 2) insert ke tabel anggota
            $sqlAnggota = 'INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp, user_id, jabatan_id)
                           VALUES ($1, $2, $3, $4, $5, $6)';
            $resAnggota = pg_query_params(
                $koneksi,
                $sqlAnggota,
                [$nama, $jenis_kelamin, $alamat, $no_telp, $user_id, $jabatan]
            );

            if ($resAnggota) {
                pesan('success', 'Anggota Baru Ditambahkan.');
            } else {
                pesan('warning', 'Gagal Menambahkan Anggota Tetapi Data Login Tersimpan Karena: ' . pg_last_error($koneksi));
            }
        } else {
            pesan('danger', 'Menambahkan Anggota Gagal Karena: ' . pg_last_error($koneksi));
        }

        header('Location: ../index.php?page=anggota');
        exit;
    }
}
