<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Ortalama=5;

    switch ($Ortalama)
    {
    
      case '90 ':
        echo "Takdir Aldınız";
        break;
    
        case '80':
          echo "Teşekkür Aldınız";
          break;
    
          case '3':
            echo "Belge Alamadınız";
            break;
    
            case '2':
              echo "Sorumlu Geçtiniz";
              break;
    
              case '1':
                echo "Kaldınız";
                break;
    
    
        default:
        echo "Sınıfta Kaldınız";
    
    }
    ?>
</body>
</html>