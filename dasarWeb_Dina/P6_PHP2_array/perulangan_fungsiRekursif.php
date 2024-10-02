<?php
function tampilkanAngka (int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";
    echo "<hr>";
    
    //panggil diri sendiri selama$indeks <= $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);    
    }  
}
tampilkanAngka(20);

?>