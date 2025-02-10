<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de Estoque</title>
</head>
<body>

<?php 

$estoque = 100;

echo "O estoque inicial: <b>" . $estoque . "</b><br><br>";

echo "<br>";

while ($estoque > 0) {
    $estoque -=1;
 echo "Vendemos 1 produto. O número itens no estoque é: <b>" .  $estoque  . "</b><br>";
    
}

?>
    
</body>

</html>