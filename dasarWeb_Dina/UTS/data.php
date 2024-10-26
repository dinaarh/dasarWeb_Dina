<?php
session_start();

// Simulasi data array multidimensi
$fashionStyles = [
    'cewe' => [
        ['style' => 'cewe1', 'description' => 'Dress merah untuk acara formal.'],
        ['style' => 'cewe2', 'description' => 'Blouse putih untuk sehari-hari.']
    ],
    'cowo' => [
        ['style' => 'cewe1', 'description' => 'Kemeja biru untuk kerja.'],
        ['style' => 'cewe2', 'description' => 'Kaos hitam untuk santai.']
    ]
];

// Simpan data ke dalam cookie
if (isset($_POST['save'])) {
    setcookie('fashionStyles', serialize($fashionStyles), time() + (86400 * 30), "/"); 
}

// Ambil data dari cookie
if (isset($_COOKIE['fashionStyles'])) {
    $fashionStyles = unserialize($_COOKIE['fashionStyles']);
}
?>