<?php
$data_penduduk = [
    ["Moyudan", 27.62, 31497],
    ["Minggir", 27.27, 29886],
    ["Seyegan", 26.63, 47129],
    ["Godean",  26.84, 72028],
    ["Gamping", 29.25, 108675]
];
?>

<table border="2">
    <tr>
        <th style="background-color: #15ff00;">Kecamatan</th>
        <th style="background-color: #007bfe;">Luas</th>
        <th style="background-color: #ff0000;">Jumlah Penduduk</th>
    </tr>
    <?php foreach ($data_penduduk as $row): ?>
    <tr>
        <td style="background-color: #fff0f0;"><?php echo $row[0]; ?></td>
        <td style="background-color: #f0f8ff;"><?php echo $row[1]; ?></td>
        <td style="background-color: #f0fff0;"><?php echo $row[2]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>