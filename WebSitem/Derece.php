<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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
    ?>a
</body>
</html>