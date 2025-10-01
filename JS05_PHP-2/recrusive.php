<?php

// no 9
/*
function tampilkanHaloDunia(){
    echo "Halo Dunia! <br>";

    tampilkanHaloDunia();
}
tampilkanHaloDunia();
*/
// no 10
    function tampilkanAngka ($jumlah, $indeks = 1){
    echo "Perulangan ke-{$indeks} <br>";

        if($indeks < $jumlah){
            tampilkanAngka($jumlah, $indeks + 1);
        }
    }
    tampilkanAngka(20);

?>