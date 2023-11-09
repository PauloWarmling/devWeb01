<?php
$nomeArquivo = 'dados.txt';
$nomeArquivo2 = 'dados2.txt';

// Verificar se o arquivo existe fisicamente
if (file_exists($nomeArquivo)) {
    // Ler o conteúdo do arquivo
    $conteudo = file_get_contents($nomeArquivo);

    echo $conteudo.'<br>';

    // Serializar os dados
    $dadosSerializados = serialize($conteudo);
     // Escrever os dados serializados no arquivo "dados2.txt"
     if (file_put_contents($nomeArquivo2, $dadosSerializados)) {
        echo 'Os dados foram serializados e escritos no arquivo "dados2.txt".';
    } else {
        echo 'Erro ao escrever no arquivo "dados2.txt".';
    }
} else {
    echo 'O arquivo "dados.txt" não existe.';
}   

?>