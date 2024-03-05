<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      
      function faktoriyel($sayi) {
        if ($sayi == 0) {
            return 1;
        } else {
            return $sayi * faktoriyel($sayi - 1);
        }
    }
    
    $sayi = 6;
    echo "Faktoriyel sonucu: " . faktoriyel($sayi);


?>
</body>
</html>