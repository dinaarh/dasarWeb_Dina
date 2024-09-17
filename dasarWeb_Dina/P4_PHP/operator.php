<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil dari perhitungan operator Aritmatika & Pemangkatan a : $a dan  b : $b <br><br>";
echo "Hasil Tambah : $hasilTambah <br>";
echo "Hasil Kurang : $hasilKurang <br>";
echo "Hasil Kali : $hasilKali <br>";
echo "Hasil Bagi : $hasilBagi <br>";
echo "Hasil Sisa Bagi : $sisaBagi <br>";
echo "Hasil Pangkat : $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama= $a >= $b;

echo "<br><br>Hasil dari perhitungan operator pembanding a : $a dan  b : $b <br><br>";
echo "Hasil Sama : $hasilSama <br>";
echo "Hasil Tidak Sama : $hasilTidakSama <br>";
echo "Hasil Lebih Kecil : $hasilLebihKecil <br>";
echo "Hasil Lebih Besar : $hasilLebihBesar <br>";
echo "Hasil Lebih Kecil Sama : $hasilLebihKecilSama <br>";
echo "Hasil Lebih Besar Sama : $hasilLebihBesarSama <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB =  !$b;

echo "<br><br>Hasil dari perhitungan operator logika a : $a dan  b : $b <br><br>";
echo "Hasil AND(dan) : $hasilAnd <br>";
echo "Hasil OR(atau) : $hasilOr <br>";
echo "Hasil NOT(negasi) a : $hasilNotA <br>";
echo "Hasil NOT(negasi) b : $hasilNotB <br>";
?>