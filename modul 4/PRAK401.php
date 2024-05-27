<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRAK401</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

    

<?php
$panjang = $lebar = $nilai = "";

?>
<form method='POST'>
        Panjang : <input type='text' min='1' name="panjang" value="<?php echo htmlspecialchars($panjang); ?>"><br>
        Lebar : <input type='text' min='1' name="lebar" value="<?php echo htmlspecialchars($lebar); ?>"> <br>
        Nilai : <input type="text" name="nilai" value="<?php echo htmlspecialchars($nilai); ?>"><br>
        <input type="submit" name="submit" value="Cetak">
        <br><br>
    </form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $nilai = $_POST['nilai'];

    if (!empty($panjang) && !empty($lebar) && !empty($nilai) && is_numeric($panjang) && is_numeric($lebar)) {
        $nilaiArray = explode(" ", $nilai);
        $totalElements = $panjang * $lebar;
    
        if (count($nilaiArray) == $totalElements) {
            printMatrix($panjang, $lebar, $nilaiArray);
        } else {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    } else {
        echo "Panjang nilai tidak sesuai dengan ukuran matriks";
    }
}

function printMatrix($panjang, $lebar, $nilaiArray) {
    $index = 0;
    echo "<table>";
    for ($i = 0; $i < $panjang; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $lebar; $j++) {
            echo "<td>";
            echo htmlspecialchars($nilaiArray[$index]);
            echo "</td>";
            $index++;
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>
</body>
</html>
