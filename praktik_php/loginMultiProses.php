<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

// jika tabel kamu bernama "User" (huruf besar U), beri tanda kutip ganda
$query = "SELECT * FROM \"User\" WHERE username='$username' AND password='$password'";
$result = pg_query($connect, $query);

if (!$result) {
    die("Query gagal dijalankan: " . pg_last_error($connect));
}

$row = pg_fetch_assoc($result);

if ($row) {
    if ($row['level'] == 1) {
        echo "Anda berhasil login sebagai <b>Admin</b>, silahkan menuju: ";
        echo "<a href='homeAdmin.html'>Halaman HOME</a>";
    } 
    elseif ($row['level'] == 2) {
        echo "Anda berhasil login sebagai <b>Guest</b>, silahkan menuju: ";
        echo "<a href='homeGuest.html'>Halaman HOME</a>";
    } 
    else {
        echo "Level pengguna tidak dikenali.";
    }
} else {
    echo "Anda gagal login. Silahkan ";
    echo "<a href='loginForm.html'>Login kembali</a>";
}
?>
