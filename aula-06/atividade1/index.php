<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>SisBib - Atividade 1</title>
    <style>
        
        table { width: 50%; border-collapse: collapse; margin-top: 15px; font-family: Arial, sans-serif; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <?php 
    include 'cabecalho-lista.html'; 
    ?>
    
    <table>
        <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Autor</th>
        </tr>
        
        <?php
        include 'conexao.php';
        
        include 'recuperar.php';

        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["titulo"] . "</td>";
                echo "<td>" . $row["autor"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Nenhum livro cadastrado.</td></tr>";
        }

        $conn->close();
        ?>
    </table>

</body>
</html>