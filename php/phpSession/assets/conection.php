<?php
// Configurações do banco de dados
$hostname = 'localhost'; // Host do banco de dados (geralmente 'localhost' em ambiente de desenvolvimento)
$database = 'session'; // Nome do banco de dados
$username = 'root'; // Nome de usuário do banco de dados
$password = ''; // Senha do banco de dados

try {
    // Cria a conexão com o banco de dados usando PDO
    $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    
    // Configura o PDO para lançar exceções em caso de erros
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Define o conjunto de caracteres para UTF-8 (opcional)
    $db->exec("SET CHARACTER SET utf8");
} catch (PDOException $e) {
    // Em caso de erro na conexão, você pode tratar o erro aqui
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
