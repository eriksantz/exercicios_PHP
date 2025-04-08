<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            text-align: center;
            padding-top: 50px;
        }

        .resultado {
            display: inline-block;
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #333;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];

            if ($numero > 0) {
                echo "Valor Positivo";
            } elseif ($numero < 0) {
                echo "Valor Negativo";
            } else {
                echo "Igual a Zero";
            }
        } else {
            echo "Acesse esse arquivo a partir do formulário!";
        }
        ?>
    </div>
</body>
</html>
