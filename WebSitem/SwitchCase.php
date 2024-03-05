<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$sayi=1;

switch($sayi){
  case 0: echo "sayı 0 dır"; break;
  case 1: echo "sayı 1 dır"; break;
  case 2: echo "sayı 2 dır"; break;
  case 3: echo "sayı 3 dır"; break;
  default: echo "sayı belli değildir";
}



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
    ?>
</body>
</html>