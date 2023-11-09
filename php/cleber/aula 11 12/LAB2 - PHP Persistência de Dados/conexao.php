<?php
// Configurações do banco de dados
$host = 'localhost'; // Nome do host (geralmente 'localhost')
$usuario = 'root'; // Nome de usuário do banco de dados
$senha = ''; // Senha do banco de dados
$banco_de_dados = 'unidavi'; // Nome do banco de dados

// Conexão com o banco de dados
$conexao  = new mysqli($host, $usuario, $senha, $banco_de_dados);

// Verificar se a conexão foi bem-sucedida
if ($conexao ->connect_error) {
    die('Erro de Conexão: ' . $mysqli->connect_error);
}
?>
