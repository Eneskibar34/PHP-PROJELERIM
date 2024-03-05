<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$personeller = array("Enes","Fatih","Mustafa","Eren","Kağan","Yasin");
print_r($personeller);
echo "<br>";


// Boyut Alma

echo count($personeller);
echo sizeof($personeller);

// Ekleme

array_push($personeller,"Poğaça");
array_unshift($personeller,"Ekmek");

// Çıkartma

array_pop($personeller);
array_shift($personeller);
print_r($personeller);


// Toplama
 array_sum($personeller);

 // Sıralama
sort($personeller);
print_r($personeller);

// Array İçindeki Bir Elemanın Varlığını Kontrol Etme
if(in_array("Mustafa", $personeller)){
 echo "Mustafa array içinde mevcut.";
}else{
 echo "Mustafa array içinde mevcut değil.";
}

// Array'den Bir Elemanı Silme
$index = array_search("Yasin", $personeller);
if($index !== false){
 unset($personeller[$index]);
}
print_r($personeller);

// Array'deki Tüm Elemanların Hepsini Sayma
function count_all_elements($array){
 $total = 0;
 foreach($array as $subArray){
    if(is_array($subArray)){
      $total += count_all_elements($subArray);
    }else{
      $total++;
    }
 }
 return $total;
}

$nestedArray = array(1, 2, array(3, 4, array(5, 6)), 7, 8, array(9, 10));
echo count_all_elements($nestedArray);
    ?>
</body>
</html>