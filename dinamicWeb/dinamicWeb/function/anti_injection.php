<?php
function anti_injection($koneksi, $data)
{
    $data = trim($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data, ENT_QUOTES);
    return pg_escape_string($koneksi, $data);
}
?>
