<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "====================== <br>";
echo "Hasil penjumlahan $a dan $b adalah $hasilTambah.<br>";
echo "<br>";
echo "Hasil pengurangan $a dan $b adalah $hasilKurang.<br>";
echo "<br>";
echo "Hasil perkalian $a dan $b adalah $hasilKali.<br>";
echo "<br>";
echo "Hasil pembagian $a dan $b adalah $hasilBagi.<br>";
echo "<br>";
echo "Hasil sisa pembagian $a dan $b adalah $sisaBagi.<br>";
echo "<br>";
echo "Hasil perpangkatan $a dan $b adalah $pangkat.<br>";
echo "<br>";
echo "====================== <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil persamaan $a dan $b adalah $hasilSama.<br>";
echo "<br>";
echo "Hasil tidak sama $a dan $b adalah $hasilTidakSama.<br>";
echo "<br>";
echo "Hasil lebih kecil $a dan $b adalah $hasilLebihKecil.<br>";
echo "<br>";
echo "Hasil lebih besar $a dan $b adalah $hasilLebihBesar.<br>";
echo "<br>";
echo "Hasil lebih kecil sama dengan $a dan $b adalah $hasilLebihKecilSama.<br>";
echo "<br>";
echo "Hasil lebih besar sama dengan $a dan $b adalah $hasilLebihBesarSama.<br>";
echo "<br>";
echo "====================== <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil dari and $a dan $b adalah $hasilAnd.<br>";
echo "<br>";
echo "Hasil dari or $a dan $b adalah $hasilOr.<br>";
echo "<br>";
echo "Hasil dari not A adalah $hasilNotA.<br>";
echo "<br>";
echo "Hasil dari not B adalah $hasilNotB.<br>";
echo "<br>";
echo "====================== <br>";

$x = $a;
$hasilPenugasan1 = $x += $b;
$hasilPenugasan2 = $x -= $b;
$hasilPenugasan3 = $x *= $b;
$hasilPenugasan4 = $x /= $b;
$hasilPenugasan5 = $x %= $b;

echo "Hasil penugasan dengan penjumlahan {$a} dan {$b} adalah $hasilPenugasan1.<br>";
echo "<br>";
echo "Hasil penugasan dengan pengurangan {$a} dan {$b} adalah $hasilPenugasan2.<br>";
echo "<br>";
echo "Hasil penugasan dengan perkalian {$a} dan {$b} adalah $hasilPenugasan3.<br>";
echo "<br>";
echo "Hasil penugasan dengan pembagian {$a} dan {$b} adalah $hasilPenugasan4.<br>";
echo "<br>";
echo "Hasil penugasan dengan sisa bagi {$a} dan {$b} adalah $hasilPenugasan5.<br>";
echo "<br>";
echo "====================== <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil identik(nilai dan tipe data sama): {$a} dan {$b} adalah $hasilIdentik.<br>";
echo "<br>";
echo "Hasil tidak identik(nilai dan tipe data tidak sama): {$a} dan {$b} adalah $hasilTidakIdentik.<br>";
echo "<br>";
echo "====================== <br>";

$jumlahSeluruhRak = 120;
$rakTerisi = 85;
$rakKosong = $jumlahSeluruhRak - $rakTerisi;
$persentase = ($rakKosong / $jumlahSeluruhRak) * 100;

echo "Diketahui bahwa jumlah seluruh rak: {$jumlahSeluruhRak}. <br>";
echo "Diketahu juga rak yang terisi: {$rakTerisi}. <br>";
echo "Hitunglah berapa persen rak buku yang masih kosong! <br>";
echo "<br>";
echo "Maka, jumlah rak yang masih kosong adalah {$rakKosong} <br>";
echo "Jadi, jpresentase rak yang masih kosong = ($rakKosong / $jumlahSeluruhRak) x 100 = " . $persentase . "% <br>";
?>