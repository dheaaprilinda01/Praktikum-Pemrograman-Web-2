<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRAK305</title>
</head>
<body>
    <form method="POST">
        <input type="text" id="input_string" name="input_string" required>
        <input type="submit" value="Submit">
        <br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_string = $_POST['input_string'];
        $panjang_string = strlen($input_string);

        for ($i = 0; $i < $panjang_string; $i++) {
            for ($j = 0; $j < $panjang_string; $j++) {
                if ($j == 0) {
                    echo strtoupper($input_string[$i]);
                } else {
                    echo strtolower($input_string[$i]);
                }
            }
        }
    }
    ?>
</body>
</html>
