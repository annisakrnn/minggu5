<?php
//percobaan no 15
$pesan1 = "saya arek malang";
echo strrev($pesan1) . "<br>";

//percobaan no 16
$pesan = "saya arek malang";
//ubah variabel $pesan menjadi array dengan perintah ecplode
$pesanPerKata = explode(" ", $pesan);
//ubah setiap kata dalam array menjadi kebalikanya
$pesanPerKata = array_map(fn($pesan) 
=> strrev($pesan), $pesanPerKata);
//gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";

//percobaan no 17 (cara kedua)
echo '<html>';
echo '<head><title>Cara02</title></head>';
echo '<body>';
echo '<p>Tanggal hari ini : '.date('d M Y').'</p>';
echo '</body>';
echo '</html>';
?>

<!--percobaan no 17 (cara pertama)!-->
<html>
<head>
    <title>Cara 01</title>
</head>
<body>
    <p>Tanggal hari ini : <?php echo date("d M Y")?></p>
</body>
</html>