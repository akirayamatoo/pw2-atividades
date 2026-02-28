<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <title>Processamento do Depoimento</title>
</head>
<body>

    <?php
    // Verificando se o método HTTP usado na requisição foi o POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        echo "<h2>Dados Recebidos pelo Servidor com Sucesso!</h2>";
        
        // Exibindo as informações recebidas do formulário
        echo "<p><b>Nome:</b> " . $_POST['nome'] . "</p>";
        echo "<p><b>E-mail:</b> " . $_POST['email'] . "</p>";
        echo "<p><b>Curso:</b> " . $_POST['curso'] . "</p>";
        echo "<p><b>Depoimento:</b> " . $_POST['depoimento'] . "</p>";
        
        echo '<br><a href="index.html">Voltar para o formulário</a>';
    } else {
        echo "<h2>Erro!</h2>";
        echo "<p>Esta página só aceita requisições via formulário (POST).</p>";
    }
    ?>

</body>
</html>