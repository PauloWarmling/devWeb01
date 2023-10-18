<?php
session_start();

// Incluir o arquivo de conexão com o banco de dados
include('./assets/conection.php');

// Verificar se o usuário está autenticado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.html');
    exit;
}

// Consulta para buscar todos os usuários cadastrados
$query = "SELECT user_id, username FROM usuario";
$result = $db->query($query);

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