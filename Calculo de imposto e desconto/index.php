<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de imposto e desconto</title>
</head>
<body>
    <?php 
    $valororiginal = 800.00;
    $valordesconto = 0.10;
    $valorimposto = 0.08;

$valorfinal = ($valororiginal - ($valororiginal * $valorimposto)) + ($valororiginal * $valordesconto);
echo  "O valor final da compra é $valorfinal";

"<br>";



    
    
    
    
    ?>
    
</body>
</html>