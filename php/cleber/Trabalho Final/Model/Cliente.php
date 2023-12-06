<?php

require_once 'config.php';

class Cliente {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function cadastrar($nome, $sobrenome, $dataNascimento, $email) {
        $stmt = $this->conexao->conectar()->prepare("INSERT INTO clientes (nome, sobrenome, data_nascimento, email) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $sobrenome, $dataNascimento, $email);
        $resultado = $stmt->execute();
        $stmt->close();

        return $resultado;
    }

    public function listarClientes() {
        $query = "SELECT id, nome, sobrenome, data_nascimento, email FROM clientes";
        $resultado = $this->conexao->conectar()->query($query);

        $clientes = array();

        while ($cliente = $resultado->fetch_assoc()) {
            $clientes[] = $cliente;
        }

        return $clientes;
    }

    public function buscarClientesPorNome($nome) {
        // Ajuste a consulta SQL conforme necessário
        $stmt = $this->conexao->conectar()->prepare("SELECT * FROM clientes WHERE nome = ?");
        $stmt->bind_param("s", $nome);
        $stmt->execute();
        $result = $stmt->get_result();
        $clientes = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
    
        return $clientes;
    }
    
}

?>
