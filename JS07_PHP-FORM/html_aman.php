<!DOCTYPE html>
<html>
<head>
    <title>HTML_Aman</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post" action="">
        <label>Masukkan teks:</label>
        <input type="text" name="input">
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data input
        $input = $_POST['input'];
        // Lindungi dari script berbahaya
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        echo "<p>Hasil input: $input</p>";
    }
    ?>
</body>
</html>
