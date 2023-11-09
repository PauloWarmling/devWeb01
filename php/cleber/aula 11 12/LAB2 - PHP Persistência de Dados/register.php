<?php
require_once("conexao.php");

$nome      = $_POST['nome'];
$sobrenome = $_POST['sobreNome'];
$email     = $_POST['email'];
$senha     = $_POST['senha'];
$cidade    = $_POST['cidade'];
$estado    = $_POST['estado'];


$query = "INSERT TBPESSOA 
            (PESNOME, PESSOBRENOME, PESEMAIL, PESPASSWORD, PESCIDADE, PESESTADO) 
            VALUES
            ('$nome', '$sobrenome', '$email', '$senha', '$cidade', '$estado')";
echo $query;
$stmt = $conexao->prepare($query);

if ($stmt->execute()) {
    header("location: index.php");
} else {
    echo 'Erro na Inserção: ' . $stmt->error;
}


?>