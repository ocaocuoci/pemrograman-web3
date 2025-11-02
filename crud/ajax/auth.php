<?php
session_start();
if (empty($_SESSION['csrf_token'])) {
    // Gunakan openssl_random_pseudo_bytes agar bisa di PHP 5.6
    $_SESSION['csrf_token'] = bin2hex(openssl_random_pseudo_bytes(32));
}
?>
