<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de autenticação de funcionários</title>
</head>
<body>
<?php

// Variáveis de exemplo para representar o status do funcionário
$permissao = true;  // Verifica se o funcionário tem permissão
$cadastro_ativo = false;  // Verifica se o cadastro está ativo
$administrador = true;  // Verifica se o funcionário é um administrador

// Lógica de autenticação
if ($administrador) {

    echo "Acesso permitido (Administrador)!";
} elseif ($permissao && $cadastro_ativo) {
    
    echo "Acesso permitido!";
} else {

    echo "Acesso negado!";
}

?>
    
    
    
    

    
</body>
</html>