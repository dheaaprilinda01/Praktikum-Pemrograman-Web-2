<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK201</title>
</head>
<body>
<?php
$terkecil = $tengah = $terbesar = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];

    $nama1 = strtolower($nama1);
    $nama2 = strtolower($nama2);
    $nama3 = strtolower($nama3);

    $names = [$nama1, $nama2, $nama3];

    sort($names);
    $terkecil = $names[0];
    $tengah = $names[1];
    $terbesar = $names[2];
}
?>

<form method="POST">
    Name 1: <input type="text" name="nama1" value="<?php echo $nama1 ?? ''; ?>"><br>
    Name 2: <input type="text" name="nama2" value="<?php echo $nama2 ?? ''; ?>"><br>
    Name 3: <input type="text" name="nama3" value="<?php echo $nama3 ?? ''; ?>"><br>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<br>$terkecil<br>";
    echo "$tengah<br>";
    echo "$terbesar<br>";
}
?>

</body>
</html>
