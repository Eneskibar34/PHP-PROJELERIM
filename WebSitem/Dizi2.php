<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function ay_yaz($sayi){
    $aylar=array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");
    return $aylar[$sayi-1];
 }
 
 $gun=5;
 $ay=ay_yaz(12);
 $yil=2023;
 echo "<strong>Tarih</strong>: $gun $ay $yil";
    ?>
</body>
</html>