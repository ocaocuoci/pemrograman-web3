<?php
    $loremIpsum = "Lorem ipsum dolor sit amet consectetur 
    adipisicing elit. Nobis, molestias officia. 
    Amet iusto enim blanditiis eius eligendi dolor 
    temporibus voluptas! Excepturi mollitia dicta necessitatibus eos, 
    tenetur laborum ipsum. Et, doloremque!";

    echo "<p>{$loremIpsum}</p>";
    echo "Panjang Karakter: " . strlen($loremIpsum) . "<br>";
    echo "Panjang Kata: " . str_word_count($loremIpsum) . "<br>";
    echo "<p>" . strtoupper($loremIpsum) . "</p>";
    echo "<p>" . strtolower($loremIpsum) . "</p>";
?>