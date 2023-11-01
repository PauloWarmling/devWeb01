<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados das Pessoas</title>
</head>
<body>
    <h1>Dados das Pessoas</h1>

    <?php
    // Nome do arquivo JSON criado anteriormente
    $nomeArquivo = 'dadosPessoas.json';

    // Verificar se o arquivo existe
    if (file_exists($nomeArquivo)) {
        // Ler o arquivo como texto
        $json_data = file_get_contents($nomeArquivo);

        // Converter o JSON em um array associativo
        $data = json_decode($json_data, true);

        if (isset($data['pessoas'])) {
            $pessoas = $data['pessoas'];
            foreach ($pessoas as $pessoa) {
                // Exibir os dados da pessoa
                echo '<h2>Pessoa:</h2>';
                echo '<p>Nome: ' . $pessoa['nome'] . '</p>';
                echo '<p>Sobrenome: ' . $pessoa['sobrenome'] . '</p>';
                echo '<p>Email: ' . $pessoa['email'] . '</p>';
                echo '<p>Cidade: ' . $pessoa['cidade'] . '</p>';
                echo '<p>Estado: ' . $pessoa['estado'] . '</p>';
                echo '<hr>'; // Linha separadora
            }
        } else {
            echo 'Erro ao ler os dados do arquivo JSON.';
        }
    } else {
        echo 'O arquivo não existe.';
    }
    ?>
    <a href="index.php">Voltar ao formulário</a>
</body>
</html>
