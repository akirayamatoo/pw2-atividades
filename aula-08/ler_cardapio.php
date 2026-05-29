<?php
// Carrega o arquivo XML
$xml = simplexml_load_file("cardapio.xml");

echo "<h2>Cardápio do Restaurante</h2>";
echo "<hr>";

// laço de repetição para passar por cada <prato> dentro de <cardapio>
foreach($xml->prato as $prato) {
    
    // Imprimindo informações puxando pelo nome exato da tag filha
    echo "<strong>Código:</strong> " . $prato->codigo . "<br>";
    echo "<strong>Prato:</strong> " . $prato->nome . "<br>";
    echo "<strong>Descrição:</strong> " . $prato->descricao . "<br>";
    echo "<strong>Valor:</strong> R$ " . $prato->valor . "<br><br>";
    
}
?>