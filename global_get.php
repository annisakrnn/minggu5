<html>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </for>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_REQUEST['fname'];
    if(empty($name)){
        echo "Name is empty";
    }else{
        echo $name;
    }
}
//percobaan n0 25
?>
<?php
$x = 75;
$y = 25;

function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
?>
<!--percobaan no 22
//$nama = @$_GET['nama'];
//$usia = @$_GET['usia'];
//echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";--!>

</body>
</html>
