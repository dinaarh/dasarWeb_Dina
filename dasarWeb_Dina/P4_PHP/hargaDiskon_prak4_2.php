<?php
$harga_produk = 120000;
$diskon_persen = 20;
$batas_diskon = 100000;
$harga_akhir = 0;

echo "<center>Harga awal produk : Rp " . number_format($harga_produk, 0, ',', '.') . "</center><br>";

// Struktur kontrol untuk mengecek apakah harga memenuhi syarat diskon
if ($harga_produk > $batas_diskon) {
    // Hitung diskon
    $diskon = ($diskon_persen / 100) * $harga_produk;
    
    // Hitung harga setelah diskon
    $harga_akhir = $harga_produk - $diskon;
    echo "<center>Mendapat diskon: Rp " . number_format($diskon, 0, ',', '.') . " ( ". $diskon_persen . "% ) </center><br>";
    echo "<center>====================================</center><br>";
    echo "<center>Harga yang harus dibayar setelah diskon: </center><br><center>Rp " . number_format($harga_akhir, 0, ',', '.') . "</center>";
} else {
    // tidak memenuhi syarat diskon, harga tetap
    $harga_akhir = $harga_produk;
    echo "<center>====================================</center><br>";
    echo "<center>Tidak mendapat diskon, harga tetap: Rp " . number_format($harga_produk, 0, ',', '.'). "</center>";
}

?>