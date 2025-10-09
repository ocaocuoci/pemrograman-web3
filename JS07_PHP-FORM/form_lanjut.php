<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <form action="proses_lanjut.php" method="POST">
        <label for="buah">Pilih Buah</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        
        <br>

        <label for="">Pilih Warna favorit:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki">Laki laki <br>
        <input type="radio" name="jenis_kelamin" value="perempuan">Perempaun <br>

        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>