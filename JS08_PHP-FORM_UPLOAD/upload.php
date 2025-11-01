<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtension = array("txt", "pdf", "doc", "docx");
    $maxfileSize = 10 * 1024 * 1024;

    if (in_array($fileType, $allowedExtension) && $_FILES["fileToUpload"]["size"] <= $maxfileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Documen berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah documen.";
        }
    } else {
        echo "Jenis documen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>
