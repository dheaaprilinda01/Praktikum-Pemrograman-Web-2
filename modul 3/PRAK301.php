<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK301</title>
    <style>
        .merah {
            color: #FF0000;
            font-weight: bold;
        }
        .hijau {
            color: #008000;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
$angka = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = $_POST['angka'];
}
?>

<form method="POST">
    Jumlah Peserta : <input type="text" name="angka" value="<?php echo $angka ?? ''; ?>"><br>
    <input type="submit" value="Cetak">
</form>

<?php
if (is_numeric($angka) && $angka > 0) {
    $i = 1;
    while ($i <= $angka) {
        if($i %2){
        echo '<span class="merah">Peserta Ke-'. $i. '</span>' . "<br>";    
        }
        else{
        echo '<span class="hijau">Peserta Ke-'. $i. '</span>' . "<br>"; 
        }
        $i++;
    }
}
?>

</body>
</html>
