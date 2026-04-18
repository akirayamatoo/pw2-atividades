<?php
include "conexao.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];

    $sql = $conn->prepare("INSERT INTO livros (titulo, autor, status) VALUES (?,?,1)");

    if(!$sql){
        die("Erro na preparação da query: " . $conn->error);
    }

    $sql->bind_param("ss", $titulo, $autor);

    if ($sql->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Erro ao inserir: " . $sql->error;
    }

    $sql->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>SisBib - Cadastrar</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .form-group { margin-bottom: 10px; }
        label { display: inline-block; width: 50px; }
    </style>
</head>
<body>
    <h2>Sistema de Biblioteca - SisBib</h2>
    <h3>Cadastrar Novo Livro</h3>
    <hr>

    <form action="cadastrar.php" method="POST">
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" name="autor" id="autor" required>
        </div>
        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>