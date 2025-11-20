<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';      // $koneksi = pg_connect(...)
    require '../function/pesan_kilat.php';
    require '../function/anti_injection.php';

    /* =========================
     * EDIT JABATAN (sudah ada)
     * ========================= */
    if (!empty($_GET['jabatan'])) {
        $id         = anti_injection($koneksi, $_POST['id']);
        $jabatan    = anti_injection($koneksi, $_POST['jabatan']);
        $keterangan = anti_injection($koneksi, $_POST['keterangan']);

        // PostgreSQL: pakai parameterized query biar aman
        $sql    = 'UPDATE jabatan SET jabatan = $1, keterangan = $2 WHERE id = $3';
        $result = pg_query_params($koneksi, $sql, [$jabatan, $keterangan, $id]);

        if ($result && pg_affected_rows($result) > 0) {
            pesan('success', 'Jabatan Telah Diubah.');
        } else {
            pesan('danger', 'Mengubah Jabatan Karena: ' . pg_last_error($koneksi));
        }

        header('Location: ../index.php?page=jabatan');
        exit;
    }

    elseif (!empty($_GET['anggota'])) {
        // id yang dikirim dianggap id user (seperti pada gambar)
        $user_id       = anti_injection($koneksi, $_POST['id']);
        $nama          = anti_injection($koneksi, $_POST['nama']);
        $jabatan       = anti_injection($koneksi, $_POST['jabatan']);
        $jenis_kelamin = anti_injection($koneksi, $_POST['jenis_kelamin']);
        $alamat        = anti_injection($koneksi, $_POST['alamat']);
        $no_telp       = anti_injection($koneksi, $_POST['no_telp']);
        $username      = anti_injection($koneksi, $_POST['username']);

        // 1) Update data pada tabel anggota (pakai user_id sebagai kunci)
        $sqlAnggota = '
            UPDATE anggota
               SET nama = $1,
                   jenis_kelamin = $2,
                   alamat = $3,
                   no_telp = $4,
                   jabatan_id = $5
             WHERE user_id = $6';
        $resAnggota = pg_query_params(
            $koneksi,
            $sqlAnggota,
            [$nama, $jenis_kelamin, $alamat, $no_telp, $jabatan, $user_id]
        );

        if ($resAnggota) {
            // 2) Jika password diisi, update username + password + salt
            if (!empty($_POST['password'])) {
                $password = anti_injection($koneksi, $_POST['password']);

                // generate salt & hash (salt + password)
                $salt              = bin2hex(random_bytes(16));
                $combined_password = $salt . $password;
                $hashed_password   = password_hash($combined_password, PASSWORD_BCRYPT);

                $sqlUser = 'UPDATE "user"
                               SET username = $1,
                                   password = $2,
                                   salt     = $3
                             WHERE id = $4';
                $resUser = pg_query_params($koneksi, $sqlUser, [$username, $hashed_password, $salt, $user_id]);

                if ($resUser) {
                    pesan('success', 'Anggota Telah Diubah.');
                } else {
                    pesan('warning', 'Data Anggota Berhasil Diubah, Tetapi Password Gagal Diubah Karena: ' . pg_last_error($koneksi));
                }
            } else {
                // password kosong → update username saja
                $sqlUser = 'UPDATE "user" SET username = $1 WHERE id = $2';
                $resUser = pg_query_params($koneksi, $sqlUser, [$username, $user_id]);

                if ($resUser) {
                    pesan('success', 'Anggota Telah Diubah.');
                } else {
                    pesan('warning', 'Data Anggota Berhasil Diubah, Tetapi Username Gagal Diubah Karena: ' . pg_last_error($koneksi));
                }
            }
        } else {
            pesan('danger', 'Mengubah Anggota Karena: ' . pg_last_error($koneksi));
        }

        header('Location: ../index.php?page=anggota');
        exit;
    }
}
?>
