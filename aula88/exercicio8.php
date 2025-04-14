<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Exercício 8</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "<h2>Resultado</h2>";
echo "<p>Média final: <strong>" . number_format($media, 2, ',', '.') . "</strong></p>";

if ($media >= 7) {
    echo "<p>Aluno <strong>aprovado</strong>!</p>";
} elseif ($media >= 5) {
    echo "<p>Aluno em <strong>recuperação</strong>.</p>";
} else {
    echo "<p>Aluno <strong>reprovado</strong>.</p>";
}
?>
      <div class="botoes-navegacao">
    <button onclick="history.back()">
        🔙 Voltar
    </button>
    <button onclick="location.href='index.html'">
        🏠 Home
    </button>
</div>
</body>
</html>
