<html>

<head>
    <title>PHP Denemesi</title>
</head>

<body>
<?php 
        
   /* 
   
     1.ÖRNEK

    echo '<p>Enes KİBAR: WEB DEVELOPER</p>'; 
    echo '<p>Fatih SARICA: SOFTWARE DEVELOPER</p>'; 
    $s1=15;
    echo $s1++; //Toplama
    echo "<br>";
    echo $s1--; //Çıkarma
    echo "<br>";
    echo $s1; 
    -----------------------------------------------------
  */



   /* 2.ÖRNEK

   $a = (11 < 10)? "Doğru" : "Yanlış";
   echo $a;
   -------------------------------------------------------
   */   


  /* 3.ÖRNEK

   $sayi1=5;
   $sayi2=10;
   $sayi3=($sayi1>$sayi2)?$sayi1++:$sayi1--;
   echo "Sayı 3 =".$sayi3."<br>";
   echo "Sayı 1 =".$sayi1;
-----------------------------------------------------------
    */

   /* 4.ÖRNEK
    echo abs(-5) ; //Çıktı : 5 
    echo "<br>";
    echo abs(7); //Çıktı : 7
    echo "<br>";
    echo max(2,3,4,5); // Çıktı:  5
    echo "<br>";
    echo min(1,3,5,7,9); // Çıktı : 9
    echo "<br>";
    echo pow(3,4); //Çıktı : 81
    echo "<br>";
    echo sqrt(16); //Karekökü : 4
--------------------------------------------------------------
     */

   /* 5.ÖRNEK 


   echo 10 < 20 ? "< KÜÇÜKTÜR !<br >" : "BÜYÜKTÜR !";
   echo 50 > 20 ? "< BÜYÜKTÜR !<br >" : "KÜÇÜKTÜR !";

   --------------------------------------------------------------
   */ 
 


   /* 6.ÖRNEK

    $KullaniciAdi = "Admin5";
    $Sifre = "123";
    if ($KullaniciAdi == "Admin" or $Sifre=="123"){  

      echo "GİRİŞ BAŞARILI";

    }
    else{echo "GİRİŞ BAŞARISIZ!!!";}
   ------------------------------------------------------------- 
    */

 


  /*
  
  7.ÖRNEK
   $x=5;
   $y=5;
   echo $x==$y;
   echo 5==3;
-------------------------------------------
*/

/* 8.ÖRNEK 

$a=5;
$b=6;
echo $a!=$b;


$a=5;
$b=5;
echo $a == $b;

$a=5;
$b=6;
echo $a <> $b;

$a=6;
$b=5;
echo $a > $b;

$a=5;
$b=6;
echo $a < $b;

$a=5;
$b=5;
echo $a >= $b;

$a=5;
$b=5;
echo $a <= $b;

$a=5;
$b=5;
echo $a === $b;



--------------------------------------------
*/

 // 9.Örnek
 /*  
 $Ortalama=5;

switch ($Ortalama)
{

  case '90 ':
    echo "Takdir Aldınız";
    break;

    case '80':
      echo "Teşekkür Aldınız";
      break;

      case '3':
        echo "Belge Alamadınız";
        break;

        case '2':
          echo "Sorumlu Geçtiniz";
          break;

          case '1':
            echo "Kaldınız";
            break;


    default:
    echo "Sınıfta Kaldınız";

}
------------------------------------------------------------


  $not =3;
  if($not==3)
  {
    echo "Orta ile geçtiniz";
  }
  
- - ----------------------------------------------------------

  
 
$sayi1=10;
$sayi2=20;

if($sayi1>$sayi2)
{
  echo "$sayi1 büyüktür";
}
else
{
  echo "$sayi2 büyüktür";
}

-------------------------------------------------------------  


$derece=10;

if($derece<=0){
  echo "katı";
}
else if($derece>0 && $derece<100){
  echo "sıvı";
}
else if($derece>100){
  echo "gaz";
}

----------------------------------------------------------

 
$Hava = "Güneşli";

if($Hava == "Güneşli"){

  echo "Dışarı Çıkabilirsin";

}else{

  echo "Evde Kal";
}

-------------------------------------------------------



$sayi=1;

switch($sayi){
  case 0: echo "sayı 0 dır"; break;
  case 1: echo "sayı 1 dır"; break;
  case 2: echo "sayı 2 dır"; break;
  case 3: echo "sayı 3 dır"; break;
  default: echo "sayı belli değildir";
}

----------------------------------------------------------

$Sayi = 3;

switch ( $Sayi ){

  case 0 : echo "Sayı 0'dır.";break;
  case 1 : echo "Sayı 1'dır.";break;
  case 2 : echo "Sayı 2'dır.";break;
  default: echo "Sayı 0,1 ve 2  değildir.";
}


for($x=0;$x <10; $x++){
  if($x==5){
  break;
  }
  echo "Sayı : $x <br>";
  echo "<br>";
}

-------------------------------------------------------------

$sayi =7;
for ($i=1; $i <= 10; $i++)
echo "$sayi x $i = " ,
$sayi * $i,"<br>";
echo "<br>";

-----------------------------------------------------------

$Sayi =5;
$faktoriyel=1;
for($i=1;$i <= $Sayi;$i++)

  $faktoriyel*=$i;
  echo "$Sayi != $faktoriyel";
  echo "<br>";
  echo "<br>";

$sayi=5;
$faktoriyel=1;
for($i=1;$i<=$sayi;$i++)
$faktoriyel*=$i;
echo "$sayi != $faktoriyel";
echo "<br>";
echo "<br>";

--------------------------------------------------------------


$sayi=120;
for($i=2;$i<=$sayi/2;$i++)
if($sayi%$i==0)
$bolenler[]=$i;

echo "<u>$sayi sayısının tam bölenleri:</u><br>";
for($i=0;@$bolenler[$i];$i++)
echo $bolenler[$i],"<br>";
echo "<br>";

echo "<table border ='1' width= '200px'>";

for($i=1;$i <=10;$i++){

  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "<td>&nbsp;</td>";
  echo "<td>&nbsp;</td>"; 
  echo "<tr>";
}
echo "</table>";

--------------------------------------------------------------


$toplam=0;
do{

 $sayi=rand(0,20);
 echo $sayi." ";
 $toplam+=$sayi;

 }while($sayi!=5);
 echo "<br>Toplam=$toplam";


for($i=1;$i <=10;$i++){

  echo $i." ";
}

-----------------------------------------------------------
$Languages=array("php",
"Node JS",
"React JS",
"Angular JS",
"Javascript",
"HTML",
"CSS"
);
$lengthArr=count ($Languages);
for($i =6;6<7;$i++){

  echo $Languages[6]."<br>";
}

-------------------------------------------------------------------------------


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
-----------------------------------------------------------------------

 $dizi =array(1,2,3,4,5);
 print_r($dizi);

 foreach($dizi as $i => $value){
  unset($dizi[$i]);
 }
 print_r($dizi);

 $dizi[]=6;
 print_r($dizi);

 $dizi = array_values($dizi);
 $dizi[] =7;
 print_r($dizi);

 ------------------------------------------------------------------------ 

 $array_fruits = array("Apple","Orange","Watermelon","Mango");
 print_r($array_fruits);

 ------------------------------------------------------------------------
 
 $array=["onee","twoo","three"];
    foreach($array as $element){
        echo $element;
        echo "<br>";
    }
    
 ------------------------------------------------------------------------

 $array= ["one","two","there"];
echo $array[0];
echo "<br>";
echo $array[1];
echo "<br>";
echo $array[2];
echo "<br>";
 ------------------------------------------------------------------------
 */
 ?>
</body>
</html>