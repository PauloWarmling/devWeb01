<?php
session_start();

require_once '../Model/config.php';
require_once '../Model/Cliente.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $dataNascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];

    // Conectar ao banco de dados (ajuste conforme suas configurações)
    $conexao = new Conexao('localhost', 'root', '', 'trabalhofinal');
    $cadastroCliente = new Cliente($conexao);

    // Chamar o método cadastrar da classe CadastroCliente
    $resultado = $cadastroCliente->cadastrar($nome, $sobrenome, $dataNascimento, $email);

    if ($resultado) {
        header('location: ../dashboard.php');
    } else {
        echo "Erro ao cadastrar cliente.";
    }

    // Fechar a conexão com o banco de dados
    $conexao->fecharConexao();
}
?>
