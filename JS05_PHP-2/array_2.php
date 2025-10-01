<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <?php
        $Dosen = [
            'Nama' => 'Hernanda Rizka Utami',
            'Domisili' => 'Pasuruan',
            'Jenis_Kelamin' => 'Perempuan'
        ];
    ?>

    <table>
        <caption>Data Mahasiswa</caption>
        <tr>
            <th>Nama</th>
            <td><?php echo $Dosen['Nama']; ?></td>
        </tr>
        <tr>
            <th>Domisili</th>
            <td><?php echo $Dosen['Domisili']; ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo $Dosen['Jenis_Kelamin']; ?></td>
        </tr>
    </table>
</body>
</html>
