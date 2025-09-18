<?php
$nilaiNumerik = 92;

if($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <= 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik <= 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf: D";
}

echo "<br>";
echo "<br>";
echo "========================<br>";
echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan {$hari} hari untuk mencapai jarak 500 kilometer.";

echo "<br>";
echo "<br>";
echo "========================<br>";
echo "<br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan ; $i++) { 
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipesan adalah: {$jumlahBuah}";

echo "<br>";
echo "<br>";
echo "========================<br>";
echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor){
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: {$totalSkor}";

echo "<br>";
echo "<br>";
echo "========================<br>";
echo "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach($nilaiSiswa as $nilai){
    if($nilai < 60){
        echo "Nilai: {$nilai} (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: {$nilai} (Lulus) <br>";
}

echo "<br>";
echo "========================<br>";
echo "<br>";

// $nilaiSiswa = [67, 69, 72, 76, 78, 80, 84, 85, 88, 91, 93, 95 ];
// Data nilai siswa
$nilai1 = 80; $nilai2 = 95; $nilai3 = 67; $nilai4 = 72;
$nilai5 = 88; $nilai6 = 91; $nilai7 = 76; $nilai8 = 84;
$nilai9 = 69; $nilai10 = 93; $nilai11 = 78; $nilai12 = 85;

// Jumlahkan semua
$total_awal = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 +
              $nilai7 + $nilai8 + $nilai9 + $nilai10 + $nilai11 + $nilai12;

// Karena kita tahu data nilainya,
// 2 tertinggi = 95 dan 93
// 2 terendah = 67 dan 69
$total = $total_awal - (95 + 93 + 67 + 69);

// Hitung rata-rata dari 8 siswa yang tersisa
$rata = $total / 8;

echo "Total nilai setelah buang 2 tertinggi & 2 terendah: $total<br>";
echo "Rata-rata: $rata";

echo "<br>";
echo "========================<br>";
echo "<br>";

$harga = 250.000;
if ($harga > 200.000) {
    $diskon = 0.15 * $harga;
} else {
    $diskon = 0;
}

$total_bayar = $harga - $diskon;

echo "Total yang harus dibayar: Rp $total_bayar <br>";

echo "<br>";
echo "========================<br>";

// Misal total jarak dari latihan
$total_jarak_atlet = 114;

// Pakai ternary untuk cek bonus
$bonus = ($total_jarak_atlet > 100) ? "YA" : "TIDAK";

echo "Total jarak tempuh atlet adalah: $total_jarak_atlet km<br>";
echo "Apakah atlet mendapatkan bonus latihan? $bonus";

echo "<br>";
echo "========================<br>";
?>