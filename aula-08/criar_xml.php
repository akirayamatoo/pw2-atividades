<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletando os dados enviados pelo formulário HTML
    $agencia = $_POST['agencia'];
    $conta = $_POST['conta'];
    $nome = $_POST['nome_cliente'];
    $saldo = $_POST['saldo_atual'];
    $movimentacao = $_POST['ultima_movimentacao'];

    // elemento Raiz do XML usando a tag <banco>
    $xml = new SimpleXMLElement('<banco/>');

    // elemento filho principal <conta_bancaria>
    $conta_filho = $xml->addChild('conta_bancaria');

    // informações coletadas como subelementos
    $conta_filho->addChild('agencia', $agencia);
    $conta_filho->addChild('numero_conta', $conta);
    $conta_filho->addchild('nome_cliente', $nome);
    $conta_filho->addChild('saldo_atual', $saldo);
    $conta_filho->addChild('ultima_movimentacao', $movimentacao);

    // gravação física do arquivo no mesmo diretório
    $xml->asXML('conta.xml');

    // Mensagem de sucesso para o usuário
    echo "<h2>Sucesso!</h2>";
    echo "<p>O arquivo <strong>conta.xml</strong> foi gerado e salvo com êxito na mesma pasta!</p>";
    echo "<p><a href='formulario.html'>Cadastrar outra conta</a> | <a href='conta.xml' target='_blank'>Visualizar XML gerado</a></p>";
} else {
    // Se tentarem acessar o arquivo PHP direto, redireciona de volta para o formulário
    header("Location: formulario.html");
    exit();
}
?>