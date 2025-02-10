<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo taxa de entrega</title>
</head>
<body>
<?php 
    $valororiginal = 800.00;
    $valorentrega1 = 0.15;
    $valorentrega2 = 0.20;
    $valorparacalculo = 1000.00;

$valorentrega = $valororiginal * $valorentrega1;

if ($valororiginal > $valorparacalculo) {

        $valorfinal = ($valororiginal + $valorentrega) - (($valororiginal + $valorentrega) * $valorentrega2);
    }

     else {$valorfinal = $valororiginal + $valorentrega;}



echo  "O valor final da compra é $valorfinal";

"<br>";
  ?>  
</body>
</html>