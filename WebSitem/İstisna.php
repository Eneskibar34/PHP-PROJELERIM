<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

   function yasHesapla($yil){
    if(is_string($yil)){
        throw new Exception("Sadece Yıl Bilgisi Giriniz.");

    }
    $sonuc=2024-$yil;
    return $sonuc;
   }
   
   try {
    $yas=yasHesapla(1975);
   echo "<b>Yaşınız=</b>".$yas."<br>";
   $yas=yasHesapla(2001);
   echo "<b>Yaşınız=</b>".$yas."<br>";
   $yas=yasHesapla("ikibin");
   echo "<b>Yaşınız=</b>".$yas."<br>";

   }
   catch(Exception $e){

    echo "<b style='color:red'>Hata Mesajı:</b>".$e->getMessage();
   }
   finally{

    echo "<br>";
    echo "<b style='background-color:orange'>
       -Yaşamınızda Mutluluklar Dileriz.</b>
    ";
   }
?>
</body>
</html>