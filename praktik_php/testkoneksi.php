<?php
include "koneksi.php";

$result = pg_query($conn, 'SELECT * FROM public."User"');
if (!$result) {
    die('Query gagal: ' . pg_last_error($conn));
}

while ($row = pg_fetch_assoc($result)) {
    echo $row['id'] . " | " . $row['username'] . " | " . $row['password'] . "<br>";
}

pg_close($conn);
?>
