<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Mês</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Resultado:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        switch ($numero) {
            case 1:  echo "<p>Janeiro</p>"; break;
            case 2:  echo "<p>Fevereiro</p>"; break;
            case 3:  echo "<p>Março</p>"; break;
            case 4:  echo "<p>Abril</p>"; break;
            case 5:  echo "<p>Maio</p>"; break;
            case 6:  echo "<p>Junho</p>"; break;
            case 7:  echo "<p>Julho</p>"; break;
            case 8:  echo "<p>Agosto</p>"; break;
            case 9:  echo "<p>Setembro</p>"; break;
            case 10: echo "<p>Outubro</p>"; break;
            case 11: echo "<p>Novembro</p>"; break;
            case 12: echo "<p>Dezembro</p>"; break;
            default: echo "<p>Número inválido. Por favor, informe de 1 a 12.</p>";
        }
    }
    ?>
</body>
</html>
