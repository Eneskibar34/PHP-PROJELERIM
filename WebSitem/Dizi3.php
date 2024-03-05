<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   // $Metin ="Merhaba Pendik Turktelekom Sehit Murat Mertel";
   // $DiziMetin = explode(" ",$Metin);
   // print_r($DiziMetin);
   // $BirlesmisMetin= implode(" ",$DiziMetin);
   // echo "<br>";
   // echo $BirlesmisMetin; SINAVDA ÇIKAR.

     $Dizi = array(3,4,5,7,9,1,12,16,8); 
  /*
     echo $Dizi[array_rand($Dizi)]; Rastgele sayı verir.
      print_r($Dizi);
    echo "<br>";
    sort($Dizi);
    print_r($Dizi);
    echo "<br>";
    rsort($Dizi);
    print_r($Dizi);
    echo "<br>";
    shuffle($Dizi);
    print_r($Dizi);

   print_r($Dizi);
   echo "<br>";
   $YeniDizi=array_reverse($Dizi);
   print_r($YeniDizi);

echo current($Dizi);
echo next($Dizi);
echo prev($Dizi);
echo end($Dizi);
echo reset($Dizi);

*/
echo count($Dizi);
echo "<br>";
echo sizeof($Dizi);
echo "<br>";
echo "Toplam:".array_sum($Dizi);
echo "<br>";
echo "Çarpım:" . array_product($Dizi);


    ?>
</body>
</html>