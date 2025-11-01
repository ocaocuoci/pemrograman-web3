<?php
$targetDir = "uploads/";

if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

if (!empty($_FILES["file"]["name"])) {
    $fileName = basename($_FILES["file"]["name"]);
    $targetFile = $targetDir . $fileName;
    $deskripsi = $_POST["deskripsi"];

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        $dataFile = "files.json";
        $data = [];

        if (file_exists($dataFile)) {
            $data = json_decode(file_get_contents($dataFile), true);
        }

        $data[] = [
            "nama" => $fileName,
            "deskripsi" => $deskripsi,
            "path" => $targetFile
        ];

        file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));
        echo "<span style='color:green;'>File berhasil diupload!</span>";
    } else {
        echo "<span style='color:red;'>Gagal mengupload file.</span>";
    }
}
?>
