<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach($nilaiSiswa as $nilai){
    if($nilai >= 70){
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus) . "<br>";
echo "----------------------------------------------------------------------<br>";
echo "<br>"; 

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];
$karyawanPengalamanLimaTahun = [];

foreach($daftarKaryawan as $karyawan){
    if($karyawan[1] > 5){
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun) . "<br>";
echo "----------------------------------------------------------------------<br>";
echo "<br>";

$daftarNilai = [
    'Matematika' =>
    [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' =>
    [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' =>
    [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];
$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah {$mataKuliah}: <br>";
foreach($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>"; 
} 
echo "----------------------------------------------------------------------<br>";
echo "<br>";
$siswa = [
    ["Andi", 75],
    ["Budi", 88],
    ["Citra", 95],
    ["Dinda", 70],
    ["Farhan", 82]
];

// Hitung total nilai
$total = 0;
for ($i = 0; $i < 5; $i++) { 
    $total += $siswa[$i][1];
}

// Hitung rata-rata
$rata = $total / 5;

echo "Rata-rata nilai kelas: $rata <br>";
echo "Siswa yang mendapat nilai di atas rata-rata:<br>";

// Cetak siswa yang nilainya lebih besar dari rata-rata
for ($i = 0; $i < 5; $i++) {
    if ($siswa[$i][1] > $rata) {
        echo $siswa[$i][0] . " dengan nilai " . $siswa[$i][1] . "<br>";
    }
}

?>