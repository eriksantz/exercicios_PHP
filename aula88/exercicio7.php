<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Comparação</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Resultado</h2>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
    
        if ($a > $b) {
            echo "<p>O valor <strong>A ($a)</strong> é maior que <strong>B ($b)</strong>.</p>";
        } elseif ($b > $a) {
            echo "<p>O valor <strong>B ($b)</strong> é maior que <strong>A ($a)</strong>.</p>";
        } else {
            echo "<p>Os valores <strong>A</strong> e <strong>B</strong> são iguais: $a.</p>";
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
