<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h2>Array Terindeks</h2>
    <?php 
        $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

        echo $Listdosen[2] . "<br>";
        echo $Listdosen[0] . "<br>";
        echo $Listdosen[1] . "<br>";

        echo "<br><b>List dosen dengan perulangan foreach: <br></b>";
        foreach ($Listdosen as $dosen) {
            echo $dosen . "<br>";
        }
        
        echo "<br><b>List dosen dengan perulangan for: <br></b>";
        for ($i = 0; $i < count($Listdosen); $i++) { 
            echo  $Listdosen[$i] . "<br>";
        }
    ?>
</body>

</html>