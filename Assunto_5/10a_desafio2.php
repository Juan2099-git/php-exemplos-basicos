<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome do produto: </label><br>
        <input type="text" name="nome" required><br>


        <label for="preco">Preço (R$): </label><br>
        <input type="number" name="preco" required><br>


        <button type="submit">Cadastrar Produto</button>
    </form>    


    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recebe os valores enviados pelo formulário
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];


        // Conecta ao banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "Senai@118";
        $dbname = "exercicio";


        $conn = new mysqli($servername, $username, $password, $dbname);


        // Verifica a conexõa
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }
        if (!empty($nome) && $preco > 0) {
            // Insere o registro no banco de dados
            $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";


            if ($conn->query($sql) === TRUE) {
                echo "<p style='color: green;'>Produto cadastrado com sucesso!</p>";
            } else {
                echo "<p style='color: red;'>Erro ao cadastrar: " . $conn->error . "</p>";
            }
                // Fecha a conexão
                $conn->close();
                // Comunica para o front-end e atualiza após 3 segundos
                header('Refresh: 3; url=' . $_SERVER['PHP_SELF']);
        } else{
            echo "<p style='color: red;'> Preencha os valores corretamente.";
            // Comunica para o front-end e atualiza após 3 segundos
            header('Refresh: 3; url=' . $_SERVER['PHP_SELF']);
        }
        }
        ?>
</body>
</html>