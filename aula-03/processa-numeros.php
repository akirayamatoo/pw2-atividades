<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Processamento do Array</title>
</head>
<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Recebendo os valores do formulário
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $n4 = $_POST['n4'];
        $n5 = $_POST['n5'];

        echo "<h2>Processando o Array Numérico</h2>";

        // Inicializando o Array Vazio
        $arrayNumeros = []; 
        echo "<b>Array Vazio:</b> ";
        print_r($arrayNumeros);
        echo "<br><br>";

        // Adicionando o 1º número e imprimindo
        $arrayNumeros[] = intval($n1); 
        echo "<b>Array Atualizado (1ª inserção):</b> ";
        print_r($arrayNumeros);
        echo "<br>";

        // Adicionando o 2º número e imprimindo
        $arrayNumeros[] = intval($n2);
        echo "<b>Array Atualizado (2ª inserção):</b> ";
        print_r($arrayNumeros);
        echo "<br>";

        $arrayNumeros[] = intval($n3);
        echo "<b>Array Atualizado (3ª inserção):</b> ";
        print_r($arrayNumeros);
        echo "<br>";

        $arrayNumeros[] = intval($n4);
        echo "<b>Array Atualizado (4ª inserção):</b> ";
        print_r($arrayNumeros);
        echo "<br>";

        $arrayNumeros[] = intval($n5);
        echo "<b>Array Atualizado (5ª inserção):</b> ";
        print_r($arrayNumeros);
        echo "<br><br>";

        echo "<hr>";

        // Imprimindo toda a array
        echo "<h3>Impressão Final de Toda a Array:</h3>";
        print_r($arrayNumeros);

        echo '<br><br><a href="numeros.html">Voltar para o formulário</a>';

    } else {
        echo "<h2>Acesso negado. Nenhum dado recebido!</h2>";
    }
    ?>

</body>
</html>