<?php
$jumlah_kursi = 45;
$kursi_terisi = 28;
$kursi_kosong = $jumlah_kursi - $kursi_terisi;

// persentase kursi kosong
$persen_kosong = ($kursi_kosong / $jumlah_kursi) * 100;

echo "Jumlah kursi : {$jumlah_kursi}<br>";
echo "Jumlah kursi telah ditempati: {$kursi_terisi}<br>";
echo "Jumlah kursi yang kosong: {$kursi_kosong}<br>";
echo "Persentase kursi yang masih kosong: " . round($persen_kosong, 2) . "%";
?>