<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK303</title>
</head>
<body>
<?php
$bawah = $atas = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bawah = $_POST['bawah'];
    $atas = $_POST['atas'];
}
?>

<form method="POST">
    Batas bawah : <input type="text" name="bawah" value="<?php echo $bawah ?? ''; ?>"><br>
    Batas atas : <input type="text" name="atas" value="<?php echo $atas ?? ''; ?>"><br>
    <input type="submit" value="Cetak">
    <br><br>
</form>

<?php
    $i = $bawah;
    do {
        if (($i + 7) % 5 == 0) {
            echo '<img src="bintang.png" alt="Image from URL" style="width: 18px; height: auto;">'. ' ';    
        } else {
            echo $i. ' ' ; 
        }
        $i++;
    } while ($i <= $atas);
?>

</body>
</html>
