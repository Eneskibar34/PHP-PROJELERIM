<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  function Topla($a,$b){

  $toplam=0;
  $toplam=$a+$b;
  echo "Toplam = $toplam";
  echo "<br>";
  }
  Topla(3,5);

  function Toplama($a,$b){

    $toplam=0;
    $toplam=$a+$b;
    return $toplam;
    }
    echo "Toplam= ".Toplama(3,5);


?>
</body>
</html>