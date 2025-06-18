<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = $_POST["nome_produto"];
    $categoria = $_POST["categoria"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];

    // Exibe as informações
    echo "<h2>Produto cadastrado:</h2>";
    echo "<ul>";
    echo "<li><strong>Nome:</strong> $nome</li>";
    echo "<li><strong>Categoria:</strong> $categoria</li>";
    echo "<li><strong>Preço:</strong> R$ $preco</li>";
    echo "<li><strong>Quantidade em estoque:</strong> $quantidade</li>";
    echo "</ul>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form method="POST">
        <label for="nome_produto">Nome do Produto:</label><br>
        <input type="text" id="nome_produto" name="nome_produto" ><br><br>

        <label for="categoria">Categoria:</label><br>
        <input type="text" id="categoria" name="categoria" ><br><br>

        <label for="preco">Preço:</label><br>
        <input type="number" id="preco" name="preco" ><br>

        <label for="quantidade">Quantidade em estoque:</label><br>
        <input type="number" id="quantidade" name="quantidade" ><br>

        <button type="submit">Cadastrar Produto</button>
    </form>
</body>
</html>
