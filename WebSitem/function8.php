
<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
<form method="post" action="">
    <label for="num1">1. Sayı:</label>
    <input type="number" id="num1" name="num1" required>
    <br>
    <label for="num2">2. Sayı:</label>
    <input type="number" id="num2" name="num2" required>
    <br>
    <label for="operation">İşlem:</label>
    <select id="operation" name="operation">
        <option value="toplama">Toplama</option>
        <option value="çıkarma">Çıkarma</option>
        <option value="çarpma">Çarpma</option>
        <option value="bölme">Bölme</option>
    </select>
    <br>
    <input type="submit" name="submit" value="Hesapla">
</form>

<?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        switch($operation){
            case 'toplama':
                $result = $num1 + $num2;
                break;
            case 'çıkarma':
                $result = $num1 - $num2;
                break;
            case 'çarpma':
                $result = $num1 * $num2;
                break;
            case 'bölme':
                if($num2 == 0){
                    echo "Sıfıra bölünemez.";
                    exit();
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                echo "Geçersiz işlem.";
                exit();
        }

        echo "Sonuç: $result";
    }
?>



</body>
</html>