<?php
// Poin yang dikumpulkan pemain
$poin_pemain = 550;
$hadiah = ($poin_pemain > 500) ? "YA" : "TIDAK";

echo "===================SKOR================<br>";
echo "Total skor pemain adalah: " . $poin_pemain . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah";


// Batas poin
// $batas_hadiah = 500;
// Struktur kontrol untuk menentukan apakah pemain mendapatkan hadiah tambahan
// if ($poin_pemain > $batas_hadiah) {
//     echo "Apakah pemain mendapatkan hadiah tambahan? YA";
// } else {
//     echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
// }
?>