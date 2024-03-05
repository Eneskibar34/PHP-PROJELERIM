<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

 // SAYIYI GÖSTERİR.
 echo "SAYI -6 : " . abs(-6);echo "<br>"; //çıktı: 6
 echo "SAYI -15 : " . abs(-15);echo "<br>"; //çıktı: 15
 echo "SAYI 2 : " . abs(2);echo "<br>"; //çıktı: 2
 echo "<br>";

 // ÜSSÜNÜ GÖSTERİR.
 echo "SAYI (2,5) : " . pow(2,5);echo "<br>"; // çıktı:32
 echo "SAYI (3,-1) : " . pow(3,-1);echo "<br>"; // çıktı:0.3
 echo "SAYI (4,2) : " . pow(4,2);echo "<br>"; // çıktı:16
 echo "<br>";

 // KAREKÖKÜNÜ GÖSTERİR.
 echo "SAYI 16 : " . sqrt(16);echo "<br>"; // çıktı:4
 echo "SAYI 25 : " . sqrt(25);echo "<br>"; // çıktı:5
 echo "SAYI 144 : " . sqrt(144);echo "<br>"; // çıktı:12
 echo "<br>";


 // ONDALIK SAYIYI TAM SAYIYA ÇEVİRİR.
 echo "SAYI 2.5326 : " . floor(2.5326);echo "<br>"; // çıktı:2
 echo "SAYI 3.14562 : " . floor(3.14562);echo "<br>"; // çıktı:3
 echo "SAYI 5.895 : " . floor(5.895);echo "<br>"; // çıktı:5
 echo "<br>";

 echo "MİN - MAX KOMUTLARI";echo "<br>"; 
 echo max(30,58,103,2,-96); //çıktı:103 EN BÜYÜK SAYIYI YAZAR
 echo min(30,58,103,2,-96); //çıktı:-96 EN KÜÇÜK SAYIYI YAZAR
 echo "<br>";
 echo "<br>";
 
 echo  "ARRAY İLE EN BÜYÜK VE EN KÜÇÜK SAYIYI YAZAR";echo "<br>";
 $dizi=array(30,58,103,2,-96); 
 echo max($dizi); //çıktı:103  
 echo min($dizi); //çıktı:-96
 echo "<br>";
 echo "<br>";

 echo  "RAND KOMUTU İLE SAYI ARALIĞINDA RANDOM SAYI ÜRETME"; echo "<br>";
 echo "RASTGELE SAYI ÜRET : ". rand(30,58); echo "<br>"; //çıktı:43
 echo "RASTGELE SAYI ÜRET : ". rand(-96,-1); echo "<br>"; //çıktı:-38

    ?>
</body>
</html>