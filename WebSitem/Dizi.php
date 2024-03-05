<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $Gunler=array("Pazartesi","Sali","Çarşamba","Perşembe","Cuma");
      $Gunler2=array("Cumartesi","Pazar","Pazartesi","Sali");
     // unset($Gunler[0]); Yazılan veriyi kaldırır.
     // array_pop($Gunler); Dizinin sonunu kaldirir.
     // array_shift($Gunler); Dizini ilk elemanını siler.
    // array_push($Gunler,"Cumartesi"); Dizinin Sonuna ekleme yapar.
   // $GunlerTami = array_merge($Gunler,$Gunler2); 2 Diziyi Birleştirir.
   // $OrtakGunler = array_intersect($Gunler,$Gunler2); Ortak Elemanları Bulur.
   // $FarkiBul = array_diff($Gunler,$Gunler2); Farkİ Bulma.
   $Sayilar=array(3,1,4,5,6,0,6,3,2,5);
   $YeniSayilar=array_unique($Sayilar);
     print_r($YeniSayilar);
    ?>
</body>
</html>