<?php
require_once ("./conection.php");

$query = "SELECT * FROM usuario";
$result = $db->query($query);

// Verifique se o formulário de registro foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Criptografa a senha

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        if ($row['username'] == $username) {
            $error = "Usuário já cadastrado.";
            header('Location: error.php?mensagem=' . $error);
        }
    }
    // Insere o novo usuário no banco de dados (substitua com sua própria lógica)
    $stmt = $db->prepare("INSERT INTO usuario (username, userpassword) VALUES (?, ?)");
    $stmt->execute([$username, $password]);

    // Redireciona para a página de login após o registro bem-sucedido
    header('Location: ../index.php');
}
?>