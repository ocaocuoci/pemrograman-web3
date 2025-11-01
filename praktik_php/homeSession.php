<?php
session_start();

if ($_SESSION['status'] != 'login') {
    header("location:sessionLoginForm.html?pesan=belum_login");
    exit;
}
?>

<html>
<head>
    <title>Halaman Home</title>
</head>
<body>
    <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Anda telah berhasil login ke sistem.</p>
    <a href="sessionLogout.php">Logout</a>
</body>
</html>
