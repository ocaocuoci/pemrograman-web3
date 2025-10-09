<?php
    $umur;
    if (isset($umur) && $umur >= 18){
        echo "Anda sudah dewasa.";
    } else {
        echo "Anda belum dewaa atau variabel 'umur' tidak ditemukan.";
    }

    echo "<br>";
    echo "<br>";
    
    $data = array("nama" => "Hernanda", "usia" => 21);
    if(isset($data["nama"])){
        echo "Nama: " . $data["nama"];
    } else {
        echo "Variabel 'nama' tidak ditemukan dalam array.";
    }
?>
