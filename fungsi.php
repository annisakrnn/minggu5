<?php
//percobaan no 4
//function perkenalan(){
    //echo "Assalamualaikum,";
    //echo "Perkenalkan, nama saya Annisa<br/>";
    //echo "Senang berkenalan dengan Anda<br/>"; 
//}
//perkenalan();
//perkenalan();

//percobaan no 5
//function perkenalan($nama, $salam){
    //echo $salam.",";
    //echo "Perkenalkan, nama saya ".$nama."<br/>";
    //echo "Senang berkenalan dengan Anda<br/>"; 
//}
//memanggil fungsi yang dibuat
//perkenalan("Hamdana","Hallo");
//echo "<hr>";
//$saya = "Elok";
//$ucapanSalam = "Selamat Pagi";
//memanggil lagi
//perkenalan($saya,$ucapanSalam);

//percobaan no 6
//function perkenalan($nama, $salam="Assalamualaikum"){
    //echo $salam.",";
    //echo "Perkenalkan, nama saya ".$nama."<br/>";
    //echo "Senang berkenalan dengan Anda<br/>"; 
//}
//memanggil fungsi yang dibuat
//perkenalan("Hamdana","Hallo");
//echo "<hr>";
//$saya = "Elok";
//$ucapanSalam = "Selamat Pagi";
//memanggil lagi
//perkenalan($saya);

//percobaan no 7
//function hitungUmur($thn_lahir, $thn_sekarang){
    //$umur = $thn_sekarang - $thn_lahir;
   // return $umur;
//}
//echo "<hr>";
//echo "Umur saya adalah ". hitungUmur(2004, 
//2023) . "tahun"

//percobaan no 8
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
//memanggil fungsi lain
echo "Saya berusia ". hitungUmur(2004,
2023) . "tahun<br/>";
echo "Senang berkenalan dengan anda</br>";
}
//memanggil fungsi perkenalan
perkenalan("Elok");

?>
