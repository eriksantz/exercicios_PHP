<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Calculadora</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Resultado da Calculadora</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacao = $_POST["operacao"];
        $resultado = "";

        switch ($operacao) {
            case "soma":
                $resultado = $num1 + $num2;
                echo "<p>$num1 + $num2 = <strong>$resultado</strong></p>";
                break;
            case "subtracao":
                $resultado = $num1 - $num2;
                echo "<p>$num1 - $num2 = <strong>$resultado</strong></p>";
                break;
            case "multiplicacao":
                $resultado = $num1 * $num2;
                echo "<p>$num1 × $num2 = <strong>$resultado</strong></p>";
                break;
            case "divisao":
                if ($num2 == 0) {
                    echo "<p><strong>Erro:</strong> Divisão por zero não é permitida.</p>";
                } else {
                    $resultado = $num1 / $num2;
                    echo "<p>$num1 ÷ $num2 = <strong>$resultado</strong></p>";
                }
                break;
            default:
                echo "<p>Operação inválida.</p>";
        }
    }
    ?>

</body>
</html>
