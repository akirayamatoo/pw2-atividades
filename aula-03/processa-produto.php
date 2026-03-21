<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Resumo da Compra</title>
</head>
<body>

    <?php
    // Verifica se a requisição foi feita por POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Recebendo os dados do formulário (eles chegam como string)
        $nomeProduto = $_POST['nome'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];

        // Conversão de Dados (Type Casting via Função)
        $valorConvertido = floatval($valor);
        $quantidadeConvertida = intval($quantidade);

        // Calculando o gasto total
        $gastoTotal = $valorConvertido * $quantidadeConvertida;

        // Retornando as informações na tela
        echo "<h2>Resumo da Compra Processado!</h2>";
        echo "<p><b>Produto inserido:</b> " . $nomeProduto . "</p>";
        echo "<p><b>Valor unitário:</b> R$ " . $valorConvertido . "</p>";
        echo "<p><b>Quantidade:</b> " . $quantidadeConvertida . " unidades</p>";
        
        echo "<hr>";
        
        // Exibindo o gasto total calculado
        echo "<h3><b>Gasto total da compra:</b> R$ " . $gastoTotal . "</h3>";

        echo '<br><a href="produto.html">Voltar para o formulário</a>';

    } else {
        echo "<h2>Acesso negado. Nenhum dado recebido!</h2>";
    }
    ?>

</body>
</html>