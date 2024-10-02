<!DOCTYPE html>
<html>

<head>
    <title>Tugas besar ke 3- Tabel dengan toggle</title>
    <script src="../P5/praktik_jquery/jquery-3.7.1.js"></script>
    <script>
    $(document).ready(function() {
        $("#flip").click(function() {
            $("#kotak").slideToggle("slow");
        });
    });
    </script>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid black;
        padding: 10px;
        text-align: left;
    }

    #kotak,
    #flip {
        padding: 5px;
        background-color: #FFFFE0;
        border: solid 2px #FFDAB9;
        border-radius: 5px;
    }

    #flip {
        text-align: center;
        font-weight: bold;
    }

    #kotak {
        padding: 20px;
    }
    </style>

</head>

<body>
    <div id="flip">Klik untuk melihat Database</div>
    <div id="kotak">
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
    </div>
</body>

</html>