
<!DOCTYPE html>
<head>
    <title>Random Number Generator</title>
</head>
<html>
<body>
   <form action="" method="get">
    <input type="text" name="adet"> 
    <input type="submit" name="Üret"> 
   </form>

    <body>
        <?php
    if($_GET){
        for($i=1;$i<=$_GET['adet'];$i++){
            $sayi =rand(0,100);
            echo "Sayı :".$sayi."<br>";

            if($sayi>50){
                echo "<b> $sayi 50'den Yüksek sayı!</b>" ;echo "<br>";
            }        
            $sayi = 0;
            for ($i = 1; $i > 50; $i++) {
                if ($i % 5 == 0) {
                    $sayi++;
                }
            }
            echo "50 den küçük sayıların sayısı: " . $sayi;
        
            
            if($sayi<50){
                echo "<b> $sayi 50'den Küçük sayı!</b>" ;echo "<br>";
            }     
            if($sayi<50){
                echo "<b> $sayi 50'den Küçük sayı!</b>" ;echo "<br>";
            }
        }
       
    }
     
    ?>
    </body>

</html>