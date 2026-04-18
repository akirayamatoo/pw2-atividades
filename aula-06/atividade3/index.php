<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>SisBib - Atividade 3</title>
    <style>
        table { width: 60%; border-collapse: collapse; margin-top: 15px; font-family: Arial, sans-serif; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .btn-cadastrar { margin-top: 15px; padding: 5px 10px; cursor: pointer; }
    </style>
</head>
<body>

    <?php include 'cabecalho-lista.html'; ?>
    
    <table>
        <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Ação</th> </tr>
        
        <?php
        include 'conexao.php';
        include 'recuperar.php';

        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["titulo"] . "</td>";
                echo "<td>" . $row["autor"] . "</td>";
                echo "<td><a href='editar.php?id=" . $row["id"] . "'>Editar</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum livro cadastrado.</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    
    <br>
    <a href="cadastrar.php"><button class="btn-cadastrar">Cadastrar Novo Livro</button></a>

</body>
</html>