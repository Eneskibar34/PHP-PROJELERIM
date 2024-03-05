
 <?php
    
    
    function print_board($size){
        for($i=0; $i<$size; $i++){
            for($j=0; $j<$size; $j++){
                echo "<td id='cell-".$i."-".$j."'></td>";
                
            }
            echo "</tr>";
        }
    }

    if(isset($_POST['size'])){
        $size = $_POST['size'];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Satranç Tahtası Oluşturma</title>
        <style>
            table {
                border-collapse: collapse;
            }
            td {
                width: 50px;
                height: 50px;
                border: 1px solid black;
                
            }
        </style>
    </head>
    <body>
        <form method="post">
            <label for="size">Tahta Büyüklüğü:</label>
            <input type="number" id="size" name="size" required>
            <input type="submit" value="Oluştur">
        </form>

        <?php if(isset($size)): ?>
            <table>
                <?php print_board($size); ?>
            </table>
        <?php endif; 


?>
</body>
</html>