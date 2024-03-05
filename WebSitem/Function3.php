<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Faktöriyel Bulma</title>
</head>
<body>
<form action="" method="post">
    Sayı: <input type="number" name="number" required>
    <input type="submit" name="submit" value="Hesapla">
</form>
    <?php

    



function factorial($n) {
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    $result = factorial($number);
    echo "Faktöriyel: " . str_pad($result, 10, " ", STR_PAD_LEFT);
}




?>
</body>
</html>