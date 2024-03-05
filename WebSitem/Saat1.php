<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// $metin ="Pendik Turk Telekom Şehit Murat Mertel MTAL";
// echo  "Girilen Metin: ". strtoupper( $metin ) . "<br>";
// echo strrev($metin) ."<br>";
// echo "Karakter Sayısı :".strlen($metin);

//  echo "<br>";

// $iban_numarasi=“TR110001100000111110011101”;
 // $bol=mb_str_split($iban_numarasi,4);
// foreach ($dizi as $d){
 //   echo $d." ";
// }

//  echo "<br>";

// $zaman=getdate(mktime(22, 04, 12, 8, 5, 1990));
 // print_r($zaman);
//  echo "<br>";

// nl2br($ifade): String ifadeleri alt alta yazmak için kullanılır. Satır sonlarına <br> tagı ekler
 $mars ="İSTİKLÂL MARŞI <br>
 Korkma, sönmez bu şafaklarda yüzen al sancak;
 Sönmeden yurdumun üstünde tüten en son ocak.
 O benim milletimin yıldızıdır, parlayacak;
 O benimdir, o benim milletimindir ancak.";
echo nl2br($mars);

echo "<br>";
echo "<br>";

$metin ="Pendik Turk Telekom Şehit Murat Mertel MTAL";
$metin = str_replace("MTAL","Mesleki Ve Teknik Anadolu Lisesi",$metin);
echo $metin;
echo "<br>";
echo substr($metin,7,5);
echo "<br>";





?>
</body>
</html>