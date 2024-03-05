<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Resim Seç : <input type="file" name="resim">
        <input type="submit" value="Gönder">
    </form>
</body>

<?php
$resim=$_FILES["resim"];
if($resim["size"] > 1024*1024)
{
    echo "Resim boyutu 1MB'dan büyük";

}
?>
</html>