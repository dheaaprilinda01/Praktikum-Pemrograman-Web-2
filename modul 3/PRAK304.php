<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRAK304</title>
</head>
<body>
    <?php
    $angka = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = $_POST['angka'];
    }
    ?>

    <form method="POST">
        Jumlah Bitang : <input type="text" name="angka" value="<?php echo $angka ?? ''; ?>"><br>
        <input type="submit" value="Submit">
        <br><br>
    </form>

    <?php
    if (is_numeric($angka) && $angka > 0) {
        if (isset($_POST['tambah'])) {
            $angka++;
        } elseif (isset($_POST['kurang']) && $angka > 1) {
            $angka--;
        }
 
        for ($i = 0; $i < $angka; $i++) {
            echo '<img src="bintang.png" alt="Image from URL" style="width: 50px; height: auto;"> '. ' '; 
        }
        echo '<br>';
        echo '<form method="POST">';
        echo '<input type="hidden" name="angka" value="' . $angka . '">';
        echo '<input type="submit" name="tambah" value="Tambah">';
        echo '<input type="submit" name="kurang" value="Kurang">';
        echo '</form>';
    }
    ?>
</body>
</html>
