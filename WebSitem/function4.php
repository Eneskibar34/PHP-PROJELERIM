<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background-color: red;
        }
    </style>
</head>
<body>
    <?php
    
    
    function createChessboard($n) {
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if (($i + $j) % 2 == 0) {
                    echo "<div style='background-color:white;width:50px;height:50px;display:inline-block;'></div>";
                } else {
                    echo "<div style='background-color:black;width:50px;height:50px;display:inline-block;'></div>";
                }
            }
            echo "<br>";
        }
    } 
    $size = 8; 
    createChessboard($size);
    

?>
</body>
</html>