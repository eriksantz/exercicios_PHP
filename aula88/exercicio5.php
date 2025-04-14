<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Par ou Ímpar </title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <h2>Resultado</h2>
    <?php
    $numero = $_POST['numero'];

    if ($numero % 2 == 0) {
        echo "<p>O número <strong>$numero</strong> é <strong>par</strong>.</p>";
    } else {
        echo "<p>O número <strong>$numero</strong> é <strong>ímpar</strong>.</p>";
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
</body>
</html>
