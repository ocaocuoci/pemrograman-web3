<html>
<head>
    <meta charset="UTF-8">
    <title>Upload File</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Upload File</h2>

        <form id="uploadForm" enctype="multipart/form-data">
            <label>Pilih File:</label>
            <input type="file" name="file" id="file" required>
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" required>
            <button type="submit">Upload</button>
        </form>

        <div id="status"></div>

        <h3>Daftar File</h3>
        <table id="fileTable">
            <thead>
                <tr>
                    <th>Nama File</th>
                    <th>Deskripsi</th>
                    <th>Lihat File</th>
                </tr>

            </thead>
            <tbody id="fileList">
                <!-- daftar file akan muncul di sini -->
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
</body>
</html>