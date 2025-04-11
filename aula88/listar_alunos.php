<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h2>Alunos Cadastrados</h2>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_alunos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM alunos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' style='width:100%; border-collapse: collapse;'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Curso</th><th>Carga Horária</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["curso"] . "</td>";
        echo "<td>" . $row["carga_horaria"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>Nenhum aluno cadastrado ainda.</p>";
}

$conn->close();
?>

</body>
</html>
