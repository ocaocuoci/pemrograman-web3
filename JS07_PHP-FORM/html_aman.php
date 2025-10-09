<!DOCTYPE html>
<html>
<head>
    <title>HTML_Aman</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post" action="">
        <label>Masukkan Nama:</label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $input = $_POST['nama'];
       
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        echo "<p>Hasil input nama: $input</p>";
    }
    ?>
</body>
</html>
