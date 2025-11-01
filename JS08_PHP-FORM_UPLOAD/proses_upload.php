<?php
$targetDirectory = "images/"; 

if(!file_exists($targetDirectory)){
    mkdir($targetDirectory, 0777, true);
}

if (!empty($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);

    for($i = 0; $i < $totalFiles; $i++){
        $fileName = $_FILES['files']['name'][$i];
        $fileTmp = $_FILES['files']['tmp_name'][$i];
        $fileType = mime_content_type($fileTmp);

        if (in_array($fileType, ['image/jpeg', 'image/png', 'image/gif'])) {
            $targetFile = $targetDirectory . basename($fileName);
            
            if(move_uploaded_file($fileTmp, $targetFile)){
                echo "Gambar $fileName berhasil diunggah. <br>";
                echo "<img src='$targetFile' width='150' style='margin:5px;'><br>";
            } else {
                echo "Gagal mengunggah gambar $fileName. <br>";
            }
        } else {
            echo "File $fileName bukan gambar yang valid. <br>";
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}
?>
