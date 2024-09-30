<?php
//percobaan no 9
//function tampilkanHaloDunia(){
    //echo "Halo dunia! <br>";
    //tampilkanHaloDunia();
//}
//tampilkanHaloDunia();

//percobaan no 10
for ($i=1; $i <=25; $i++){
    echo "Perulangan ke-{$i} <br>";
}
function tampilkanangka(int $jumlah, int $indeks = 1){
    echo"Perulangan ke-{$indeks} <br>";
    //panggil diri sendiri selama $indeks <= $jumlah
    if($indeks < $jumlah){
        tampilkanangka($jumlah, $indeks +1);
    }
}
tampilkanangka(20);
?>