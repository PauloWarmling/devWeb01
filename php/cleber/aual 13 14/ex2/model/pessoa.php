<?php

// namespace lab2\model;

include_once("./model/endereco.php");
include_once("./model/contato.php");
class Pessoa {
    private $nome;
    private $sobrenome;
    private $dtnascimento;
    private $cpfcnpj;
    private $tipo;

    private $telefone;

    private $endereco;

    public function __construct() {
        $this->iniciaClasse();
    }

    public function iniciaClasse() {
        $this->endereco = new Endereco();
        $this->telefone = new Contato();
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getDtnascimento() {
        return $this->dtnascimento;
    }

    public function setDtnascimento($dtnascimento) {
        $this->dtnascimento = $dtnascimento;
    }

    public function getCpfcnpj() {
        return $this->cpfcnpj;
    }

    public function setCpfcnpj($cpfcnpj) {
        $this->cpfcnpj = $cpfcnpj;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    // public function setEndereco($endereco) {
    //     $this->endereco = $endereco;
    // }

    public function getTelefone() {
        return $this->telefone;
    }
        

    public function getNomeCompleto($nome, $sobrenome){
        return $nome. ' ' .$sobrenome;
    }

    public function getIdade($dtnascimento) {
        $dataNascimento = DateTime::createFromFormat('d/m/Y', $dtnascimento);
        $hoje = new DateTime();
        $idade = $hoje->diff($dataNascimento)->y;
        return $idade;
    }

}
?>