<?php
// Poin yang dikumpulkan pemain
$poin_pemain = 550;

// Batas poin
$batas_hadiah = 500;

echo "Total skor pemain adalah: " . $poin_pemain . "<br>";

// Struktur kontrol untuk menentukan apakah pemain mendapatkan hadiah tambahan
if ($poin_pemain > $batas_hadiah) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
?>