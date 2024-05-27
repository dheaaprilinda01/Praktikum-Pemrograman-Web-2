<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK302</title>
    <style>
        .image-container {
            width: 150px;
            height: 1px; 
            text-align: right;
        }
    </style>
</head>
<body>
<?php
$angka = $url = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = $_POST['angka'];
    $url = $_POST['image_url'];
}
?>

<form method="POST">
    Tinggi : <input type="text" name="angka" value="<?php echo $angka ?? ''; ?>"><br>
    Alamat gambar : <input type="text" id="image_url" name="image_url" value="<?php echo $url; ?>"><br>
    <input type="submit" value="Cetak">
</form>

<?php
$rows = $angka;

while ($rows >= 1) {
    $spaces = $angka - $rows;
    while ($spaces > 0) {
        echo "&nbsp;&nbsp;";
        $spaces--;
    }
    
    $stars = $rows;
    echo '<div class="image-container">'; 
    while ($stars > 0) {
        if (!empty($url)) {
            echo '<img src="' . $url . '" alt="Image from URL" style="width: 25px; height: auto;">';
        }
        $stars--;
    }
    echo '</div>'; 
    
    echo "<br>";
    $rows--;
}
?>

</body>
</html>
