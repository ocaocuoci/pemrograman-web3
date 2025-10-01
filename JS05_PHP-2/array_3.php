<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Multidimentional Array</h2>
    <table>
        <tr>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>
        <?php
        $movie = array (
            array("Sore: Istri dari Masa Depan", 2025, 4.7),
            array("Komang", 2025, 5.0),
            array("UP", 2009, 4.8),
            array("Tingkerbell", 2008, 4.7)
        );

        echo "<tr>";
            echo "<td>" . $movie[0][0] . "</td>";
            echo "<td>" . $movie[0][1] . "</td>";
            echo "<td>" . $movie[0][2] . "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>" . $movie[1][0] . "</td>";
            echo "<td>" . $movie[1][1] . "</td>";
            echo "<td>" . $movie[1][2] . "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>" . $movie[2][0] . "</td>";
            echo "<td>" . $movie[2][1] . "</td>";
            echo "<td>" . $movie[2][2] . "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>" . $movie[3][0] . "</td>";
            echo "<td>" . $movie[3][1] . "</td>";
            echo "<td>" . $movie[3][2] . "</td>";
        echo "</tr>";
        ?>
    </table>
</body>
</html>