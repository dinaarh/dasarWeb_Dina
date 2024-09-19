<?php
$nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Mengurutkan nilai dari yang terendah ke tertinggi
sort($nilai_siswa);
echo "Nilai siswa diurutkan = ";
foreach ($nilai_siswa as $nilai) {
    echo $nilai . " ";
}

// Menghitung total nilai setelah mengabaikan dua nilai terendah dan dua nilai tertinggi
echo "<br><br>Nilai setelah mengabaikan dua nilai tertinggi dan terendah = ";
$total_nilai = 0;
for ($i = 2; $i < count($nilai_siswa) - 2; $i++) { 
    $total_nilai += $nilai_siswa[$i];
    echo $nilai_siswa[$i] . " ";
}

// Menghitung nilai rata-rata
$rata_rata = $total_nilai / (count($nilai_siswa) - 4); 

echo "<br>Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $total_nilai . "<br>";
echo "Nilai rata-rata setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $rata_rata;
?>