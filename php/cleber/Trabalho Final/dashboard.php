<?php
session_start();

require_once './Model/Cliente.php';

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

$oCliente = new Cliente(new Conexao('localhost', 'root', '', 'trabalhofinal'));

if (isset($_GET['submitSearch'])) {
    if (!empty($_GET['search'])) {
        $searchTerm = $_GET['search'];
        $clientes = $oCliente->buscarClientesPorNome($searchTerm);
    } else {
        $clientes = $oCliente->listarClientes();
    }
} else {
    $clientes = $oCliente->listarClientes();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/table.css">
    <title>Dashboard</title>
</head>
<body>

    <header>
        <section>
            <div class="header-form">
                <h1>Bem-vindo, <?php echo $_SESSION['user']; ?>!</h1>
            </div>
        </section>
    </header>

    <main>
        <div class="app">

            <div class="search">
                <form method="get" action="#">
                    <label for="search">Buscar por Nome</label>
                    <input type="text" id="search" name="search" placeholder="Digite o nome">
                    <button type="submit" name="submitSearch">Buscar</button>
                </div>
                
            </form>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($clientes as $cliente): ?>
                            <tr>
                                <td><?php echo $cliente['id']; ?></td>
                                <td><?php echo $cliente['nome']; ?></td>
                                <td><?php echo $cliente['sobrenome']; ?></td>
                                <td><?php echo $cliente['email']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="button-wrapper">
                <button id='register' onclick="window.location.href='./register.php';">Cadastro</button>
            </div>
        </div>
    </main>
</body>
</html>
