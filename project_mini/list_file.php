<?php
$dataFile = "files.json";
if (file_exists($dataFile)) {
    $data = json_decode(file_get_contents($dataFile), true);

    if (!empty($data)) {
        foreach ($data as $item) {
            echo "<tr>
                    <td>{$item['nama']}</td>
                    <td>{$item['deskripsi']}</td>
                    <td><a href='{$item['path']}' target='_blank'>Lihat</a></td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Belum ada file yang diupload.</td></tr>";
    }
} else {
    echo "<tr><td colspan='3'>Belum ada file yang diupload.</td></tr>";
}
?>
