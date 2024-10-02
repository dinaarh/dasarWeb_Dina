<!DOCTYPE html>
<html>

<head>
    <title>Tugas besar ke 2- Tabel Data siswa</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }
    </style>
</head>

<body>
    <h1>Data Siswa</h1>
    <?php
    $mahasiswa = array(
        array("Dina", 15, "10A", "Malang"),
        array("Dinda", 16, "10B", "Batu"),
        array("Keisya", 15, "10A", "Dinoyo"),
        array("Rakhmah", 25, "15B", "Malang")
    );

    $totalUmur = 0;
    for ($i = 0; $i < count($mahasiswa); $i++) {
        $totalUmur += $mahasiswa[$i][1]; 
    }

    $rataRataUmur = $totalUmur / count($mahasiswa);
    ?>
    <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <?php
        for ($i = 0; $i < count($mahasiswa); $i++) {
            ?>
        <tr>
            <td><?= $mahasiswa[$i][0] ?></td>
            <td><?= $mahasiswa[$i][1] ?></td>
            <td><?= $mahasiswa[$i][2] ?></td>
            <td><?= $mahasiswa[$i][3] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <h2>Rata-rata Umur Siswa: <?= $rataRataUmur ?> tahun </h2>
</body>

</html>