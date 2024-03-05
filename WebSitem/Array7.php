<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $Musteri=array(

     "Musteri1"=>  array("AdSoyad"=>"Enes",
     "İL"=>"Bartin",
     "Yaş"=>"18",
     "Meslek"=>"Bilgi Teknolojileri"),

     "Musteri2"=>  array("AdSoyad"=>"Fatih",
     "İL"=>"Sivas",
     "Yaş"=>"16",
     "Meslek"=>"Mühendis"),

     "Musteri3"=>  array("AdSoyad"=>"Hakan",
     "İL"=>"Yozgat",
     "Yaş"=>"17",
     "Meslek"=>"Bilgi Teknolojileri"),
     );
    echo $Musteri["Musteri1"]["AdSoyad"]; echo "<br>";
     echo $Musteri["Musteri2"]["AdSoyad"]; echo "<br>";
     echo $Musteri["Musteri3"]["AdSoyad"];echo "<br>";
    /*
    foreach($Musteri as $Anahtar=>$satir){
         echo $Anahtar."=>";
        foreach($satir as  $Anahtar=>$deger){

            echo $Anahtar.":".$deger." ";

        }
        echo "<br>";
    }
    */
    
    ?>
</body>
</html>