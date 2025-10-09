<?php
    $pattern = '/[a-z]/'; //untuk mencocokkan huruf kecil
    $text = 'This is a Sample Text';

    if(preg_match($pattern, $text)){
        echo "Huruf kecil ditemukan!";
    } else {
        echo "Tidak ada huruf kecil!";
    }

    echo "<br><br>";

    $pattern = '/[0-9]/'; // untuk mencocokkan satu atau lebih digit
    $text = 'There are 123 apples.';

    if(preg_match($pattern, $text, $matches)){
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }
    
    echo "<br><br>";

    $pattern = '/apple/';
    $replacement = 'banana';
    $text = 'I like apple pie.';
    $new_text = preg_replace($pattern, $replacement, $text);
    echo $new_text; 
   
    echo "<br><br>";

    $pattern = '/go*d/'; //mencocokkan kata
    $text = 'god is good.';
    if(preg_match($pattern, $text, $matches)){
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    echo "<br><br>";

    $pattern = '/go?d/'; //mencocokkan kata
    $text = 'god is good.';
    if(preg_match($pattern, $text, $matches)){
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    echo "<br><br>";

    $pattern = '/go{1,2}d/'; //mencocokkan kata
    $text = 'god is good.';
    if(preg_match($pattern, $text, $matches)){
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }
?>