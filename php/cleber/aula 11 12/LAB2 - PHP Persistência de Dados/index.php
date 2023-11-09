<?php
require_once("conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $search = $_POST['search'];

    if ($search) {
        $query = "SELECT * FROM TBPESSOA WHERE PESNOME LIKE '$search'";
    } else {
        $query = "SELECT * FROM TBPESSOA";
    }
}

// Executar a consulta
$result = $conexao->query($query);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>
<body>
    <div class="app">
        <form action="" method="post">

            <div class="input-wrapper">
                <label for="search">Pesquisar</label>
                <input type="text" name="search" id="search">
            </div>

            <div class="submit">
                <input type="submit" value="Pesquisar">
            </div>
        </form>

        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>
            <?php
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['PESCODIGO'] . '</td>';
                    echo '<td>' . $row['PESNOME'] . '</td>';
                    echo '<td>' . $row['PESSOBRENOME'] . '</td>';
                    echo '<td>' . $row['PESEMAIL'] . '</td>';
                    echo '<td>' . $row['PESPASSWORD'] . '</td>';
                    echo '<td>' . $row['PESCIDADE'] . '</td>';
                    echo '<td>' . $row['PESESTADO'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>

        <div class="submit">
            <a href='formulario.html'><button>Inserir</button></a>
        </div>
    </div>
    
</body>
</html>