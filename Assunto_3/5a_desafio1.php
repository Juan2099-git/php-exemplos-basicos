<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $idade = date('Y') - $_POST['ano'];

    if ($idade >= 18) {
        echo "Acesso permitido";
        file_put_contents('log_acessos.txt', "$nome - $idade anos\n", FILE_APPEND);
    } else {
        echo "Acesso negado";
    }
}
?>

<form method="POST">
<input type="text" name="nome" required>
<input type="number" name="ano" required>
<button type="submit">Cadastrar</button>


</body>
</html>