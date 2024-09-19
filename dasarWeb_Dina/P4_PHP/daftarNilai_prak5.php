<?php
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

// Menghitung total nilai dan rata-rata kelas
$totalNilai = 0;
foreach ($daftarNilai as $siswa) {
    $totalNilai += $siswa[1]; // Menjumlahkan nilai setiap siswa
}

$rataRata = $totalNilai / count($daftarNilai); 

echo "Rata-rata kelas: $rataRata <br>";
echo "===========================<br>";

echo "Siswa dengan nilai di atas rata-rata:<br>";

foreach ($daftarNilai as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]}<br>";
    }
}
?>