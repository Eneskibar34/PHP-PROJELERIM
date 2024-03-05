<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    Onluk sayısını giriniz:
    <input type="text" name="onluk_sayi">
    <input type="submit" name="gonder" value="Gönder">
</form>

<?php
    if(isset($_POST['gonder'])){
        $onluk_sayi = $_POST['onluk_sayi'];
        $ikilik_sayi = decbin($onluk_sayi);
        echo "Onluk sayısı: " . $onluk_sayi . "<br>";
        echo "İkilik sayısı: " . $ikilik_sayi . "<br>";
    }
?>

</body>
</html>





