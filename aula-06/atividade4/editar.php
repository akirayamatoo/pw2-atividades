<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];

    $sql = $conn->prepare("UPDATE livros SET titulo=?, autor=? WHERE id=?");
    
    $sql->bind_param("ssi", $titulo, $autor, $id);

    if ($sql->execute()) {

    header("Location: index.php");
        exit();
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
    $sql->close();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = $conn->prepare("SELECT * FROM livros WHERE id=?");
    $sql->bind_param("i", $id);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        $livro = $result->fetch_assoc();
    } else {
        die("Livro não encontrado.");
    }
    $sql->close();
} else {
    die("ID não informado.");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>SisBib - Atualizar</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .form-group { margin-bottom: 10px; }
        label { display: inline-block; width: 50px; }
    </style>
</head>
<body>
    <h2>Sistema de Biblioteca - SisBib</h2>
    <h3>Atualizar Informações - Livro</h3>
    <hr>

    <form action="editar.php" method="POST">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" name="id" id="id" value="<?php echo $livro['id']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" value="<?php echo htmlspecialchars($livro['titulo']); ?>" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" name="autor" id="autor" value="<?php echo htmlspecialchars($livro['autor']); ?>" required>
        </div>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>