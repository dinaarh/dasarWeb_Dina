<?php
// Lokasi penyimpanan gambar yang diunggah
$targetDirectory = "images/";

// Periksa apakah direktori penyimpanan ada, jika tdak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileType = $_FILES['files']['type'][$i];
        $targetFile = $targetDirectory . basename($fileName);

        // Pindahkan file yang diunggah ke direktori penyimpanan
        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "Gambar $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah gambar $fileName.<br>";
            }
        } else {
            echo "File $fileName bukan tipe gambar yang diizinkan.<br>";
        }
    } 
} else {
    echo "Tidak ada gambar yang diunggah";
}
?>