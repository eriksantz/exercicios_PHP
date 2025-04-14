<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_alunos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$curso = $_POST['curso'];
$carga_horaria = $_POST['carga_horaria'];

$sql = "INSERT INTO alunos (nome, curso, carga_horaria) VALUES ('$nome', '$curso', $carga_horaria)";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Cadastro realizado com sucesso!</h2>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
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
