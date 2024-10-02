<!DOCTYPE html>
<html>

<head>
    <title>Tugas besar ke 1- array multidimensi</title>
</head>

<body>
    <h1>Data Mahasiswa array multidimensi</h1>

    <?php
    $mahasiswa = array(
        array("dina", "193856", "teknik informatika", "dina@gmail.com"),
        array("rahmawati", "3123624", "teknik kimia", "rahmawati@gmail.com")
    );

    foreach ($mahasiswa as $value) {
    ?>
    <ul>
        <li>Nama: <?= $value[0] ?></li>
        <li>NIM: <?= $value[1] ?></li>
        <li>Jurusan: <?= $value[2] ?></li>
        <li>Email: <?= $value[3] ?></li>
    </ul>
    <br>
    <?php
    }
    ?>

</body>

</html>