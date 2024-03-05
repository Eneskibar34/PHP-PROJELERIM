<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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
    ?>
</body>
</html>