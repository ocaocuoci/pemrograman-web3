<?php

 // no. 4
    function perkenalan(){
        echo "Assalamualaikum. ";
        echo "Perkenalkan, nama saya Hernanda<br>";
        echo "Senang berkenalan dengan Anda<br>";
    }
    //memanggil fungsi
    perkenalan();
    echo "<br>"; 
    perkenalan();

// no 5

    function perkenalan($nama, $salam){
        echo $salam. ", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    perkenalan("Hernanda", "Hallo");

    echo "<hr>";

    $saya = "Nanda";
    $ucapanSalam = "Selamat Pagi";

    perkenalan($saya, $ucapanSalam);


// no 6
    function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam. ", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
    }

    perkenalan("Hernanda", "Hallo");

    echo "<hr>";

    $saya = "Nanda";
    $ucapanSalam = "Selamat Pagi";

    perkenalan($saya);

// no 7
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }
    echo "Umur saya adalah ". hitungUmur(2004, 2023) ." tahun";


//no 8
    function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
    }
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam. ", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";

        echo "Umur saya adalah ". hitungUmur(2004, 2023) ." tahun<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }
    perkenalan("Hernanda");

?> 
