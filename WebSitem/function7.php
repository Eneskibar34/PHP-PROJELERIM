<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post" action="">
        <label for="number">Sayı:</label>
        <input type="number" id="number" name="number" required><br>

        <input type="submit" value="Gönder">
    </form>
<?php

function sayi($number) {
    return decbin($number);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = intval($_POST['number']);

    if (!empty($number)) {
        $binary = sayi($number);
        echo "Onluk sayı: " . htmlspecialchars($number) . "<br>";
        echo "İkilik sayı: " . htmlspecialchars($binary) . "<br>";
    } else {
        echo "Sayı Giriniz!";
    }
}
?>


</body>
</html>