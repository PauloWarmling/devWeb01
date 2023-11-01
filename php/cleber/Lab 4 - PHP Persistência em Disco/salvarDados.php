<?php
// Array para armazenar os dados das 10 pessoas
$pessoas = array();

for ($i = 1; $i <= 10; $i++) {
    $pessoa = array(
        'nome' => $_POST['nome'.$i],
        'sobrenome' => $_POST['sobrenome'.$i],
        'email' => $_POST['email'.$i],
        'senha' => $_POST['senha'.$i],
        'cidade' => $_POST['cidade'.$i],
        'estado' => $_POST['estado'.$i]
    );

    // Adicionar a pessoa ao array de pessoas
    $pessoas[] = $pessoa;
}

// Estruturar os dados no formato desejado (com a chave "pessoas")
$data = array(
    'pessoas' => $pessoas
);

// Converter o array em formato JSON
$json_data = json_encode($data, JSON_PRETTY_PRINT);

// Nome do arquivo onde os dados serão salvos
$nomeArquivo = 'dadosPessoas.json';

// Salvar os dados em um arquivo JSON
if (file_put_contents($nomeArquivo, $json_data)) {
    header('location: lerDados.php');
} else {
    echo 'Erro ao salvar os dados no arquivo ' . $nomeArquivo;
}
?>
