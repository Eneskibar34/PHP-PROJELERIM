<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="sayi1">Sayı 1:</label>
    <input type="number" id="sayi1" name="sayi1" required>
    <br>
    <label for="sayi2">Sayı 2:</label>
    <input type="number" id="sayi2" name="sayi2" required>
    <br>
    <label for="operation">İşlem:</label>
    <select id="operation" name="operation">
        <option value="Topla">Topla</option>
        <option value="Çıkarma">Çıkarma</option>
        <option value="Çarpma">Çarpma</option>
        <option value="Bölme">Bölme</option>
    </select>
    <br>
    <input type="submit" value="Hesapla">
</form>
<?php

function doMathOperation($sayi1, $sayi2, $operation) {
    switch ($operation) {
        case 'Topla':
            return $sayi1 + $sayi2;
        case 'Çıkarma':
            return $sayi1 - $sayi2;
        case 'Çarpma':
            return $sayi1 * $sayi2;
        case 'Bölme':
            if ($sayi2 == 0) {
                throw new Exception('Division by zero is not allowed.');
            }
            return $sayi1 / $sayi2;
        default:
            throw new Exception('Invalid operation.');
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sayi1 = (int)$_POST['sayi1'];
    $sayi2 = (int)$_POST['sayi2'];
    $operation = $_POST['operation'];

    try {
        $result = doMathOperation($sayi1, $sayi2, $operation);
        echo "Result: {$result}";
    } catch (Exception $e) {
        echo "Error: {$e->getMessage()}";
    }
}

?>


</body>
</html>