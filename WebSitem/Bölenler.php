<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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
    ?>
</body>
</html>