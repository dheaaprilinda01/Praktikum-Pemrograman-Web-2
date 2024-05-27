<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRAK402</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th{
            background: #9c9c9c;
        }
    </style>
</head>
<body>

<?php
$siswa = array(
    array(
        "nama" => "Andi",
        "NIM" => "2101001",
        "UTS" => "87",
        "UAS" => "65",
    ),
    array(
        "nama" => "Budi",
        "NIM" => "2101002",
        "UTS" => "76",
        "UAS" => "79",
    ),
    array(
        "nama" => "Tono",
        "NIM" => "2101003",
        "UTS" => "50",
        "UAS" => "41",
    ),
    array(
        "nama" => "Jessica",
        "NIM" => "2101004",
        "UTS" => "60",
        "UAS" => "75",
    )
);
?>

<table>
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Akhir</th>
        <th>Huruf</th>
    </tr>
    <?php foreach ($siswa as $data): ?>
    <tr>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['NIM']; ?></td>
        <td><?php echo $data['UTS']; ?></td>
        <td><?php echo $data['UAS']; ?></td>
        <td><?php 
            $akhir = ($data['UTS'] * 0.4) + ($data['UAS'] * 0.6);
            echo $akhir;
        ?></td>
        <td><?php 
            if ($akhir >= 80) {
                echo 'A';
            } elseif ($akhir >= 70) {
                echo 'B';
            } elseif ($akhir >= 60) {
                echo 'C';
            } elseif ($akhir >= 50) {
                echo 'D';
            } else {
                echo 'E';
            }
        ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
