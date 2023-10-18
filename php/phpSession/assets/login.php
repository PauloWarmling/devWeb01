<?php
session_start();

// Incluir o arquivo de conexão com o banco de dados
include('./conection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta para buscar o usuário com o nome de usuário especificado
    $query = "SELECT user_id, username, userpassword FROM usuario WHERE username = :username";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    
    // Verificar se o usuário foi encontrado
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $user_id = $row['user_id'];
        $stored_password = $row['userpassword'];

        // Verificar a senha
        if (password_verify($password, $stored_password)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $username;
            header('Location: ../painel.php'); // Redireciona para o painel após o login bem-sucedido
        } else {
            $error = "Senha incorreta. Tente novamente.";
            header('Location: error.php?mensagem=' . $error);
        }
    } else {
        $error = "Usuário não encontrado";
        header('Location: error.php?mensagem=' . $error);
    }
}
?>