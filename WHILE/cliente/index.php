<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Verificação de Cliente</title>

</head>
<body>

<?php

$senha = "12345";
$insira = "senha";
$tentativas = 1;

if ($tentativas < 3 && $insira == $senha){
    echo "Acesso concedido. "; 
} 
else if ($tentativas > 3 && $insira != $senha) {
    echo "Acesso negado. ";
}

while ($tentativas <= 3 && $insira != $senha ) {

echo "Senha icorreta! Número de tentativas: " . $tentativas . "<br>";
$tentativas++;
   
}
?>
    
</body>
</html>