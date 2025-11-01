<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="upload.css">
    <title>Unggah Gambar (Multi Upload)</title>
</head>
<body>
    <div class="upload-form-container">
        <h2>Unggah File Gambar</h2>

        <form action="upload_ajax.php" id="upload-form" method="post" enctype="multipart/form-data">
            <div class="file-input-container">
                <input type="file" name="file[]" id="file" class="file-input" multiple accept="image/*">
                <label for="file" class="file-label">Pilih file</label>
            </div>

            <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
        </form>

        <div id="status" class="upload-status"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>
