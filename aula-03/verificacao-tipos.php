<?php
echo "<h2>Prática em Sala - Verificação de Tipo de Dados</h2>";


// 1. Verificação de Ponto Flutuante (Float)
$meuFloat = 85.9;

echo "<h3>Teste de verificação - Float</h3>";
echo "Valor a ser verificado: " . $meuFloat . "<br>";

// Utilizando gettype() para mostrar o tipo original 
echo "Tipo identificado pelo gettype(): <b>" . gettype($meuFloat) . "</b><br><br>";

echo "Resultado da Verificação is_float():<br>";
// Utilizando is_float() para a verificação condicional
if (is_float($meuFloat)) {
    echo "<b>É um Float.</b><br>";
} else {
    echo "<b>Não é um Float.</b><br>";
}

echo "<hr>";




// 2. Verificação de Texto (String)
$minhaString = "Akira Yamato"; // Criando uma variável do tipo string

echo "<h3>Teste de verificação - String</h3>";
echo "Valor a ser verificado: " . $minhaString . "<br>";

echo "Tipo identificado pelo gettype(): <b>" . gettype($minhaString) . "</b><br><br>";

echo "Resultado da Verificação is_string():<br>";
// Utilizando is_string() para a verificação condicional 
if (is_string($minhaString)) {
    echo "<b>É uma String.</b><br>";
} else {
    echo "<b>Não é uma String.</b><br>";
}

?>