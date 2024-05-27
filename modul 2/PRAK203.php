<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK203</title>
</head>
<body>
<?php

$angka = $dari = $ke = $hasil = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = $_POST['angka'];
    $dari = $_POST['dari'];
    $ke = $_POST['ke'];

    if ($dari == "celsius" && $ke == "fahrenheit") {
        $hasil = $angka * 9 / 5 + 32 . " &deg;". "F";
    } elseif ($dari == "celsius" && $ke == "reamur") {
        $hasil = $angka * 4 / 5 . " &deg;". "Re";
    } elseif ($dari == "celsius" && $ke == "kelvin") {
        $hasil = $angka + 273 . " &deg;". "K";
    } elseif ($dari == "fahrenheit" && $ke == "reamur") {
        $hasil = ($angka - 32) * 4 / 9 . " &deg;". "Re";
    } elseif ($dari == "fahrenheit" && $ke == "kelvin") {
        $hasil = 5 / 9 * ($angka - 32) + 273.15. " &deg;". "K";
    } elseif ($dari == "fahrenheit" && $ke == "celsius") {
        $hasil = 5 /  9 * ($angka - 32). " &deg;". "C";
    } elseif ($dari == "reamur" && $ke == "celsius") {
        $hasil = 5 /  9 * $angka . " &deg;". "C";
    } elseif ($dari == "reamur" && $ke == "fahrenheit") {
        $hasil = (9 / 4 * $angka) + 32 . " &deg;". "F";
    } elseif ($dari == "reamur" && $ke == "kelvin") {
        $hasil = 5 / 4 * $angka + 273 . " &deg;". "K";
    } elseif ($dari == "kelvin" && $ke == "reamur") {
        $hasil = 4 / 5 * ($angka - 273) . " &deg;". "Re";
    } elseif ($dari == "kelvin" && $ke == "fahrenheit") {
        $hasil = 9 / 4 * ($angka - 273) + 32 . " &deg;". "F";
    } elseif ($dari == "kelvin" && $ke == "celsius") {
        $hasil = $angka - 273 . " &deg;". "C";
    }
    else{
        $hasil = $angka;
    }
}

?>

<form method="POST">
    Output yang diinginkan: <br>
    Nilai  : <input type="text" name="angka" value="<?php echo $angka; ?>"><br>
    Dari : <br>
    <input type="radio" name="dari" value="celsius" <?php if($dari == "celsius") echo "checked"; ?>> Celcius <br>
    <input type="radio" name="dari" value="fahrenheit" <?php if($dari == "fahrenheit") echo "checked"; ?>> Fahrenheit <br>
    <input type="radio" name="dari" value="reamur" <?php if($dari == "reamur") echo "checked"; ?>> Rheamur <br>
    <input type="radio" name="dari" value="kelvin" <?php if($dari == "kelvin") echo "checked"; ?>> Kelvin <br>

    Ke : <br>
    <input type="radio" name="ke" value="celsius" <?php if($ke == "celsius") echo "checked"; ?>> Celcius <br>
    <input type="radio" name="ke" value="fahrenheit" <?php if($ke == "fahrenheit") echo "checked"; ?>> Fahrenheit <br>
    <input type="radio" name="ke" value="reamur" <?php if($ke == "reamur") echo "checked"; ?>> Rheamur <br>
    <input type="radio" name="ke" value="kelvin" <?php if($ke == "kelvin") echo "checked"; ?>> Kelvin <br>

    <input type="submit" value="Konversi">
</form>
<br>

<?php 
echo "<b>". "Hasil Konversi: ". $hasil . "</b>"."<br>";
?>

</body>
</html>
