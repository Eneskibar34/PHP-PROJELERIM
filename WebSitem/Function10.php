<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
$s1=$_GET['Sayi1'];
$s2=$_GET['Sayi2'];
$sec=$_GET['Secim'];
$sonuc=0;

switch($sec){

    case'+':
        $sonuc=$s1+$s2;

        break;
        case'-':
            $sonuc=$s1-$s2;
    
            break;   
            case'*':
                $sonuc=$s1*$s2;
        
                break;

                case'/':
                    $sonuc=$s1/$s2;
            
                    break;
}
echo "$s1 $sec $s2 = $sonuc";
header("Refresh:2,url=Function11.php");

?>
<br>
<a href ="Function11.php">Geri Dön</a>
</body>

</html>