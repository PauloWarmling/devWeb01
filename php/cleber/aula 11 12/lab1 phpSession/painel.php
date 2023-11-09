<?php

// Incluir o arquivo de conexão com o banco de dados
include('./assets/conection.php');

// Verificar se o usuário está autenticado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    $error = "Usuário não autenticado.";
    header('Location: ./assets/error.php?mensagem=' . $error);
    exit;
}

// Consulta para buscar todos os usuários cadastrados
$query = "SELECT * FROM usuario";
$result = $db->query($query);

$password = $_GET["password"];

if (!isset($_SESSION['session_start_time'])) {
    $_SESSION['session_start_time'] = time(); // Armazena o momento de início da sessão
    $_SESSION['last_request_time'] = $_SESSION['session_start_time']; // Inicializa o último tempo de requisição
}

// Atualizar o tempo da última requisição
$_SESSION['last_request_time'] = time();

// Calcular o tempo de sessão em segundos
$session_start_time = $_SESSION['session_start_time'];
$last_request_time = $_SESSION['last_request_time'];
$session_duration = $last_request_time - $session_start_time;

// Converter o tempo de sessão em um formato legível
$session_duration_formatted = gmdate('H:i:s', $session_duration);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Staatliches&display=swap" rel="stylesheet">
</head>
<body>
    <div class="painel">
        <h1>Bem-vindo, <?php echo $_SESSION['username']; ?>!</h1>
        <h3>Seus Dados</h3>
        <p>Senha: <?php echo $password?></p>
        <p>Início da sessão: <?php echo date('Y-m-d H:i:s', $session_start_time)?></p>
        <p>Ùltima requisição: <?php echo date('Y-m-d H:i:s', $last_request_time)?></p>
        <p>Tempo da sessão: <?php echo $session_duration_formatted?></p>

        <h2>Usuários Cadastrados</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome de Usuário</th>
            </tr>
            <?php
            // Loop para exibir os usuários
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['user_id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
        
        <div class="button">
            <a href="./assets/logout.php">Sair</a>
        </div>
    </div>
</body>
</html>