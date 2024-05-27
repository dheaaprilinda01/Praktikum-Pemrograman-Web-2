<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK202</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
<?php
$nama = $nim = $jeniskelamin = "";
$errnama = $errnim = $errjeniskelamin = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jeniskelamin = $_POST['jk'];

    if(empty($nama)){
        $errnama = '<span class="error">Nama tidak boleh kosong</span>';
    }
    if(empty($nim)){
        $errnim = '<span class="error">NIM tidak boleh kosong</span>';
    }
    if(empty($jeniskelamin)){
        $errjeniskelamin = '<span class="error">Jenis kelamin harus dipilih</span>';
    }
}
?>

<form method="POST">
    Nama  : <input type="text" name="nama" value="<?php echo $nama; ?>">
    <span class="error">* <?php echo $errnama;?></span>
    <br>
    Nim   : <input type="text" name="nim" value="<?php echo $nim; ?>">
    <span class="error">* <?php echo $errnim;?></span>
    <br>
    Jenis Kelamin : 
    <span class="error">* <?php echo $errjeniskelamin;?></span>
    <br>
    <input type="radio" name="jk" value="Laki-laki" <?php if($jeniskelamin == "Laki-laki") echo "checked"; ?>> Laki-laki
    <input type="radio" name="jk" value="Perempuan" <?php if($jeniskelamin == "Perempuan") echo "checked"; ?>> Perempuan <br>
    <input type="submit">
</form>
<br>

<?php 
echo $nama . "<br>";
echo $nim . "<br>";
echo $jeniskelamin . "<br>";
?>

</body>
</html>
