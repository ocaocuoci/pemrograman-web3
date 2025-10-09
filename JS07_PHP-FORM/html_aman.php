<!DOCTYPE html>
<html>
<head>
    <title>HTML Aman & Validasi Email</title>
</head>
<body>
    <h2>Form Input & Validasi Email</h2>
    <form method="post" action="">
        <label>Masukkan Nama:</label>
        <input type="text" name="nama"><br><br>

        <label>Masukkan Email:</label>
        <input type="text" name="email"><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Bagian input aman
        $input = $_POST['nama'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "<p>Hasil input nama: $input</p>";

        // Bagian validasi email
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email valid: $email</p>";
        } else {
            echo "<p>Email tidak valid!</p>";
        }
    }
    ?>
</body>
</html>
