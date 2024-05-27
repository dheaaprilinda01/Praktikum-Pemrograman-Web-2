<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK204</title>
</head>
<body>
<?php
$angka = $penyebutan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = $_POST['angka'];
    
    if($angka == 0){
        $penyebutan = 'Nol';
    } elseif ($angka >= 1 && $angka <= 9){
        $penyebutan = 'Satuan';
    } elseif ($angka > 10 && $angka <= 19){
        $penyebutan = 'Belasan';
    } elseif ($angka >= 20 && $angka <= 99 || $angka == 10 ){
        $penyebutan = 'Puluhan';
    } elseif ($angka >= 100 && $angka <= 999){
        $penyebutan = 'Ratusan';
    } else {
        $penyebutan = 'Anda Menginput Melebihi Limit Bilangan';
    }
}
?>

<form method="POST">
    Nilai  : <input type="text" name="angka" value="<?php echo $angka; ?>">
    <br>
    <input type="submit" value="Konversi">
</form>
<br>

<?php 
echo "<b>". "Hasil: ". $penyebutan . "</b>"."<br>";
?>

</body>
</html>
