<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pedidos de compras</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // número de pedidos
    $numeroPedidos = (int) $_POST['numeroPedidos']; 

    // variável contagem
    $contagem = 1;

    // Processa os pedidos
    while ($contagem <= $numeroPedidos) {
        echo "Processando pedido $contagem...<br>";
        $contagem++;
    }
}
?>

<!-- Formulario -->
<form method="POST">
    Digite o número de pedidos a serem processados: <input type="number" name="numeroPedidos" required>
    <button type="submit">Processar</button>
</form>
</body>
</html>