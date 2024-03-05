<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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
    ?>
</body>
</html>