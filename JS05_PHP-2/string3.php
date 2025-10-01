<?php
/*
$pesan = "Saya arek Pasuruan";
echo strrev($pesan) , "<br>";
*/

// no 16

$pesan = "Saya arek Pasuruan";

$pesanPerkata = explode(" ", $pesan);

$pesanPerkata = implode(" ", $pesanPerkata);

echo $pesan . "<br>";
?>