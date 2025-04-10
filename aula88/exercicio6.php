<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Ordem Crescente</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Resultado da ordenação</h2>
    <?php
    $valores = [$_POST['num1'], $_POST['num2'], $_POST['num3']];
    sort($valores);

    echo "<p>Valores em ordem crescente:</p>";
    echo "<ul>";
    foreach ($valores as $valor) {
        echo "<li>$valor</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>