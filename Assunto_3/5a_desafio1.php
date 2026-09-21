<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Maioridade</title>
</head>
<body>
    
<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $idade = date('Y') - $_POST['ano'];

    if ($idade >= 18) {
        echo "<p>Acesso permitido, $nome! sua idade é: $idade </p>";
        file_put_contents('log_acessos.txt', "$nome - $idade anos\n", FILE_APPEND);
    } else {
        echo "<p>Acesso negado, $nome! sua idade é: $idade";
    }
}
?>

<form method="POST">
<label for="nome">Nome:</label>
<input type="text" name="nome" required>
<label for="ano">Ano de nascimento:</label>
<input type="number" name="ano" required>
<button type="submit">Cadastrar</button>


</body>
</html>