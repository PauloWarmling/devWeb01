<?php
include_once("pessoa.php");

$oPessoa = new Pessoa();

$oPessoa->setNome('Paulo');
$oPessoa->setSobrenome('Warmling');

echo $oPessoa->getNomeCompleto($oPessoa->getNome(), $oPessoa->getSobrenome());
?>