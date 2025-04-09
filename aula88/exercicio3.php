<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h2>Resultado do fatorial</h2>

    <?php 
     function fatorial($n) {
        if ($n <= 1) {
            return 1;
        } else {
            return $n * fatorial($n - 1);
        }
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = intval($_POST["numero"]);
        $resultado = fatorial($numero);
        echo "<p>O fatorial de <strong>$numero</strong> é: <strong>$resultado</strong></p>";
    } else {
        echo "<p>Nenhum número foi enviado.</p>";
    }
    ?>
</body>
</html>