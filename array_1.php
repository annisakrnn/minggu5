<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
    $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
    $urutan = [$Listdosen[2], $Listdosen[0], $Listdosen[1]];

    //Pemanggilan menggunakan perulangan
    echo"List Dosen: <br>";
    foreach ($urutan as $dosen){
        echo "$dosen,<br>";
        }

    //Pemanggilan secara manual
    echo $Listdosen[2] . "<br>";
    echo $Listdosen[0] . "<br>";
    echo $Listdosen[1] . "<br>";
    
    ?>
</body>
</html>