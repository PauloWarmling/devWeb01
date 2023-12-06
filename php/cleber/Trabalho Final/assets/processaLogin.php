<?php
session_start();

require_once '../Model/auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Criar uma instância da classe Autenticacao
    $autenticacao = new Autenticacao();

    // Verificar se as credenciais são válidas
    if ($autenticacao->autenticar($username, $password)) {
        $_SESSION['user'] = $username;
        header('Location: ../dashboard.php');
        exit();
    } else {
        echo "Credenciais inválidas. Tente novamente.";
    }
}
?>
