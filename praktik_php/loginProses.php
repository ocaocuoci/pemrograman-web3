<?php
include "koneksi.php";

// pastikan data dikirim dari form
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // jika tabel kamu bernama "User", beri tanda kutip ganda
    $sql = "SELECT * FROM \"User\" WHERE username='$username' AND password='$password'";
    $result = pg_query($connect, $sql);

    if (!$result) {
        die("Query gagal dijalankan: " . pg_last_error($connect));
    }

    $cek = pg_num_rows($result);

    if ($cek > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        echo "Anda Berhasil Login, silahkan menuju ";
        echo "<a href='homeSession.php'>Halaman Home</a>";
    } else {
        echo "Gagal login, silahkan login lagi<br>";
        echo "<a href='sessionLoginForm.html'>Halaman Login</a><br>";
    }
} else {
    echo "Akses langsung tidak diperbolehkan. Silakan login melalui form.";
}
?>
