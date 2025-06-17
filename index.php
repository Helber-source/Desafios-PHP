<?php
echo "<h1>Olá, mundo!</h1>";
echo "<hr><br>";

//Calculadora simples
echo "<h2>Calculadora Simples</h2>";
$num1 = 5;
$num2 = 2;

echo "Soma: " . ($num1 + $num2) . "<br>";
echo "Subtração: " . ($num1 - $num2) . "<br>";
echo "Multiplicação: " . ($num1 * $num2) . "<br>";
echo "Divisão: " . ($num1 / $num2) . "<br>";
echo "<hr><br>";

//Verificando se é maior de idade
echo "<h2>Verificando Maioridade</h2>";
$idade = 15;

if ($idade >= 18) {
    echo "A pessoa tem $idade anos e é maior de idade.<br>";
} else {
    echo "A pessoa tem $idade anos e é menor de idade.<br>";
}
echo "<hr><br>";

//Calculadora de Descontos
echo "<h2>Calculadora de Descontos</h2>";
$preco = 200;
$descontoPercentual = 15;

$valorDesconto = ($preco * $descontoPercentual) / 100;
$precoFinal = $preco - $valorDesconto;

echo "Valor original: R$ $preco<br>";
echo "Desconto: $descontoPercentual% (R$ $valorDesconto)<br>";
echo "Valor final: R$ $precoFinal<br>";
echo "<hr><br>";

//Pontuação de Jogo
echo "<h2>Pontuação de Jogo</h2>";
$pontuacao = 100;
echo "Pontuação inicial: $pontuacao<br>";

$vitorias = 3;
$derrotas = 2;

$pontuacao += $vitorias * 20;
$pontuacao -= $derrotas * 15;

echo "Após $vitorias vitórias e $derrotas derrotas, a pontuação final é: $pontuacao<br>";
echo "<hr><br>";

//login simples
echo "<h2>Login Simples</h2>";
$usuarioCorreto = "admin";
$senhaCorreta = "1234";

$usuarioInserido = "admin";
$senhaInserida = "12345";

if ($usuarioInserido === $usuarioCorreto && $senhaInserida === $senhaCorreta) {
    echo "Login bem-sucedido! Bem-vindo, $usuarioInserido.<br>";
} else {
    echo "Falha no login. Usuário ou senha incorretos.<br>";
}
echo "<hr><br>";

//Contagem Regressiva
echo "<h2>Contagem Regressiva</h2>";
for ($i = 10; $i >= 0; $i--) {
    echo $i . "<br>";
}
echo "Feliz Ano Novo!<br>";
echo "<hr><br>";

//Soma dos Números Pares 
echo "<h2>Soma dos Números Pares de 1 a 100</h2>";
$somaPares = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $somaPares += $i;
    }
}
echo "A soma dos números pares de 1 a 100 é: $somaPares<br>";
echo "<hr><br>";

//Boas-vindas
echo "<h2>Boas-vindas</h2>";
function boasVindas($nome) {
    return "Bem-vindo(a), $nome!<br>";
}

echo boasVindas("Maria");
echo boasVindas("João");
echo boasVindas("Visitante");

// Total de Compras
echo "<h1>Total de Compras</h1>";
$precos = [29.50, 15.50, 42.00, 8.00, 23.00];
$total = 0;
foreach ($precos as $preco) {
    $total += $preco;
}

echo "Total da compra: R$ " . number_format($total, 2, ',', '.');
echo "<hr>";

// Cadastro do Usuário
echo "<h1>Cadastro do Usuário</h1>";
$usuario = [
    "nome" => "João Silva",
    "idade" => 28,
    "email" => "joao.silva@email.com"
];

echo "Nome: " . $usuario["nome"] . "<br>";
echo "Idade: " . $usuario["idade"] . "<br>";
echo "E-mail: " . $usuario["email"] . "<br>";
echo "<hr>";

// Lista de Produtos
echo "<h1>Lista de Produtos</h1>";
$produtos = [
    "Notebook" => 3500.00,
    "Mouse" => 80.50,
    "Teclado" => 150.99
];

foreach ($produtos as $nome => $preco) {
    echo "Produto: $nome, Preço: R$ " . number_format($preco, 2, ',', '.') . "<br>";

}
    echo "<hr>";

    // Cadastro de Alunos
    echo "<h1>Cadastro de Alunos</h1>";
    $alunos = [
        "Ana" => 8.5,
        "Bruno" => 7.0,
        "Carla" => 8.5
    ];

    $somaNotas = 0;
    $quantidadeAlunos = count($alunos);

    foreach ($alunos as $nome => $nota) {
        echo "Aluno: $nome, Nota: $nota<br>";
        $somaNotas += $nota;
    }

    $media = $somaNotas / 3;
    echo "Média da turma: " . number_format($media, 2, ',', '.');
?>

?>
