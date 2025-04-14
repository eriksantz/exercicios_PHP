<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Tabuada</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Resultado da Tabuada</h2>
    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        echo "<p>Tabuada do número <strong>$numero</strong>:</p>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhum número foi enviado.</p>";
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

