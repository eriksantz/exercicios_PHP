<?php
$conn = new mysqli("localhost", "root", "", "sistema_escolar");

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if (isset($_GET['excluir'])) {
    $id = intval($_GET['excluir']);
    $conn->query("DELETE FROM alunos WHERE id = $id");
}

$busca = "";
if (isset($_GET['busca'])) {
    $busca = $conn->real_escape_string($_GET['busca']);
    $sql = "SELECT * FROM alunos WHERE nome LIKE '%$busca%'";
} else {
    $sql = "SELECT * FROM alunos";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 12 - Buscar e Excluir Alunos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h2>Buscar Alunos</h2>
    <form method="GET" action="">
        <input type="text" name="busca" placeholder="Digite o nome do aluno..." value="<?= htmlspecialchars($busca) ?>">
        <input type="submit" value="Buscar">
    </form>

    <?php if ($result->num_rows > 0): ?>
        <table>
            <tr>
                <th>Nome</th>
                <th>Carga Horária</th>
                <th>Ações</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['nome']) ?></td>
                    <td><?= $row['carga_horaria'] ?></td>
                    <td><a href="?excluir=<?= $row['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este aluno?');">Excluir</a></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>Nenhum aluno encontrado.</p>
    <?php endif; ?>

</body>
</html>

<?php $conn->close(); ?>
