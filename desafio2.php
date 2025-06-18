<?php
// Processamento do formulário
$nome = $produto = $avaliacao = $comentario = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = ($_POST["nome"]);
    $produto = ($_POST["produto"]);
    $avaliacao = ($_POST["avaliacao"]);
    $comentario = ($_POST["comentario"]);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Feedback</title>
</head>
<body>
    <h2>Feedback</h2>
    <form method="post">
        Nome: <input type="text" name="nome" required><br>
        Produto:
        <select name="produto" required>
            <option value="">Selecione</option>
            <option value="Notebook">Notebook</option>
            <option value="Smartphone">Smartphone</option>
            <option value="Fone de Ouvido">Fone de Ouvido</option>
            <option value="Monitor">Monitor</option>
        </select><br>
        Avaliação:
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo '<input type="radio" name="avaliacao" value="' . $i . '" required> ' . $i;
        }
        ?>
        <br>
        Comentário:<br>
        <textarea name="comentario" required></textarea><br>
        <button type="submit">Enviar</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h3>Seu feedback:</h3>
        <p><strong>Nome:</strong> <?= $nome ?></p>
        <p><strong>Produto:</strong> <?= $produto ?></p>
        <p><strong>Avaliação:</strong> <?= $avaliacao ?></p>
        <p><strong>Comentário:</strong> <?= ($comentario) ?></p>
    <?php endif; ?>
</body>

</html>