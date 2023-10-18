<?php 
    $mensagem = urldecode($_GET['mensagem']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Staatliches&display=swap" rel="stylesheet">
    <title>Erro de login</title>
</head>
<body>
    <div class="painel">
        <h1>Erro de Login</h1>
        <p><?php echo $mensagem ?></p>
        <div class="button">
            <a href="../index.php">Voltar para a página de login</a>
        </div>
    </div>
</body>
</html>