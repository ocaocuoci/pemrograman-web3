<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM \"User\" WHERE username = '$username' AND password = '$password'";
$result = pg_query($connect, $sql);

if (!$result) {
    die("Query gagal: " . pg_last_error($connect));
}

$cek = pg_num_rows($result);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';

    echo "Anda berhasil login, silakan menuju 
    <a href='homeSession.php'>Halaman Home</a>";
} else {
    echo "Gagal login, silakan login lagi. <br>";
    echo "<a href='sessionLoginForm.html'>Kembali ke Halaman Login</a>";
}
?>
