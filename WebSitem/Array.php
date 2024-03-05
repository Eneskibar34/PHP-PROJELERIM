<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    echo "GÜNLER","<br>","<br>";
    $Gunler=array("Pazartesi","Sali","Çarşamba","Perşembe","Cuma");
    $Gunler[]= "Cumartesi";
    $Gunler[]= "Pazar";

    
    foreach($Gunler as $deger){
        echo "$deger <br>";
    }

    echo "Haftanın ilk günü:".$Gunler[0]."<br>";
    echo "Haftanın son günü:".$Gunler[6]."<br>";    
    
    print_r($Gunler);
    echo "<pre>";
    var_dump($Gunler);
    echo "</pre>";


    $Iller=array("34"=>"İstanbul",
    "74"=>"Bartin",
    "26"=>"Ankara",
    "59"=>"Kayseri",
    "35"=>"Isparta",
    );
    $Iller["01"]="Adana";
    $Iller["81"]="Düzce";

    foreach($Iller as $Anahtar=>$deger){

        echo $Anahtar." ".$deger."<br>","<br";
    }
   */
  $Toplam=0;
    function sayilar(){
        for($i=1;$i<=10;$i++)
           $dizi[]=rand(1,100);
        return $dizi;
     }
     
     $donen_dizi=sayilar();
     foreach($donen_dizi as $deger)
     echo $deger," ";"<br";
     $Toplam = $Toplam+$deger;
     echo "DİZİDEKİ ELEMANLARIN TOPLAMI:" .$Toplam;
  

    ?>
</body>
</html>