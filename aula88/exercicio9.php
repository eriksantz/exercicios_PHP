<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Exercício 9</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
    $idade = $_POST["idade"];

    echo "<h2>Resultado</h2>";
    echo "<p>Idade Informada: <strong>$idade</strong></p>";

    if ($idade >= 18) {
        echo "<p>Você é <strong> maior de idade </strong>. </p>";
    } else {
        echo "<p>Você é <strong> menor de idade </strong>. </p>";
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
