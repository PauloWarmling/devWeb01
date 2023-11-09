<?php
include_once("./model/pessoa.php");

$oPessoa = new lab2\model\Pessoa();

$oPessoa->setNome('Paulo');
$oPessoa->setSobrenome('Warmling');

echo $oPessoa->getNomeCompleto($oPessoa->getNome(), $oPessoa->getSobrenome());
?>