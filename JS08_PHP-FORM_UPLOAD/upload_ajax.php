<?php
if (isset($_FILES['file'])) {
    $errors = [];
    $allowed_ext = ["jpg", "jpeg", "png", "gif"];
    $max_size = 2097152; 

    if (!is_dir("uploads")) {
        mkdir("uploads", 0755, true);
    }

    foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
        if (empty($_FILES['file']['name'][$key])) continue;

        $file_name = $_FILES['file']['name'][$key];
        $file_size = $_FILES['file']['size'][$key];
        $file_tmp = $_FILES['file']['tmp_name'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowed_ext)) {
            $errors[] = "File '$file_name' tidak diizinkan. Hanya JPG, JPEG, PNG, atau GIF.";
            continue;
        }

        if ($file_size > $max_size) {
            $errors[] = "Ukuran file '$file_name' melebihi 2 MB.";
            continue;
        }

        $safe_name = time() . '_' . preg_replace("/[^A-Za-z0-9_\-\.]/", '_', $file_name);

        if (!move_uploaded_file($file_tmp, "uploads/" . $safe_name)) {
            $errors[] = "Gagal menyimpan file '$file_name'.";
        }
    }

    if (empty($errors)) {
        echo "Semua file berhasil diunggah ke folder 'uploads/'.";
    } else {
        echo implode("<br>", $errors);
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
