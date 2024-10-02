<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Associative array</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    table {
        border-collapse: collapse;
        width: 50%;
        margin: 20px auto;
        font-size: 18px;
    }

    table,
    th,
    td {
        border: 1px solid #dddddd;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    caption {
        caption-side: top;
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    </style>
</head>

<body>
    <?php 
        $Dosen = [
            'nama' => "Elok Nur Hamdana", 
            'domisili' => "Malang", 
            'jenis_kelamin' => "Perempuan"];
    ?>

    <table>
        <caption>Informasi Dosen</caption>
        <tr>
            <th>Nama</th>
            <td><?php echo $Dosen['nama']; ?></td>
        </tr>
        <tr>
            <th>Domisili</th>
            <td><?php echo $Dosen['domisili']; ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>
</body>

</html>