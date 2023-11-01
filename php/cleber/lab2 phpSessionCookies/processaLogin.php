<?php
session_start();

// Verificar se o formulário de login foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Definir informações de usuário na sessão
    $_SESSION['username'] = $username;
    $_SESSION['session_start_time'] = time();
    $_SESSION['last_request_time'] = $_SESSION['session_start_time'];

    // Calcular o tempo de sessão em segundos
    $session_start_time = $_SESSION['session_start_time'];
    $last_request_time = $_SESSION['last_request_time'];
    $session_duration = $last_request_time - $session_start_time;

    // Armazenar informações em cookies
    setcookie('username', $username, time() + 3600); // Um cookie que expira em 1 hora
    setcookie('session_start_time', $session_start_time, time() + 3600);
    setcookie('last_request_time', $last_request_time, time() + 3600);
    setcookie('session_duration', $session_duration, time() + 3600);

    // Redirecionar para o painel
    header('Location: painel.php');
}
?>