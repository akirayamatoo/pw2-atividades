<?php
include "conexao.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = $conn->prepare("DELETE FROM livros WHERE id = ?");
    
    $sql->bind_param("i", $id);

    if ($sql->execute()) {
        
        header("Location: index.php");
        exit();
    } else {
        echo "Erro ao remover registro: " . $conn->error;
    }

    $sql->close();
} else {
    echo "ID não fornecido.";
}

$conn->close();
?>