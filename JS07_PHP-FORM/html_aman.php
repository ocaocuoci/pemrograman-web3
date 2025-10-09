<!DOCTYPE html>
<html>
<head>
    <title>Form HTML Aman</title>
</head>
<body>
    <h2>Contoh htmlspecialchars() Sederhana</h2>

    <!-- Form input -->
    <form method="post" action="">
        Masukkan teks (boleh pakai tag HTML): <br><br>
        <input type="text" name="input" placeholder="<h1>Halo Dunia</h1>" required>
        <input type="submit" value="Kirim">
    </form>

    <hr>

    <?php
    // Mengecek apakah form sudah dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Ambil data dari form
        $input = $_POST['input'];

        // Ubah karakter khusus menjadi teks aman
        $aman = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        // Tampilkan hasilnya
        echo "<b>Hasil tanpa htmlspecialchars():</b><br>";
        echo $input; // tag HTML akan dijalankan
        echo "<br><br>";

        echo "<b>Hasil dengan htmlspecialchars():</b><br>";
        echo $aman; // tag HTML ditampilkan apa adanya (aman)
    }
    ?>
</body>
</html>
