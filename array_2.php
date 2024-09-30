<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
<?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'];
?>
<table border="1">
        <tr>
            <td>Nama</td>
            <td><?php echo "{$Dosen ['nama']} <br>";?></td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td><?php echo "{$Dosen ['domisili']} <br>";?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo "{$Dosen ['jenis_kelamin']} <br>";?></td>
        </tr>
</table>

</body>
</html>