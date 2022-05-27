<?php
require_once 'conexao/Conexao.php';

class ClienteDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function salvar( ClienteDTO $clienteDTO ) {
        try {
            $sql = "INSERT INTO athenas.cadastros"
                . "(nome,email,telefone,password) "
                . "VALUES(:nome,:email,:telefone,:password)";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( ":nome", $clienteDTO->getNome() );
            $stmt->bindValue( ":email", $clienteDTO->getEmail() );
            $stmt->bindValue( ":telefone", $clienteDTO->getTelefone() );
            $stmt->bindValue( ":password", $clienteDTO->getPassword() );
            return $stmt->execute();
        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar: ", $e->getMessage();
        }
    }

    public function findAll() {
        try {
            $sql = "SELECT * FROM cadastros";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $clientes = $stmt->fetchAll( );
            return $clientes;
        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar o cliente: ", $e->getMessage();
        }
    }

    public function deleteById( $idCliente ) {
        try {
            $sql = "DELETE FROM cadastros WHERE id = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $idCliente );
            return $stmt->execute();
        } catch ( PDOException $e ) {
            echo "Erro ao excluir ", $e->getMessage();
        }
    }

    public function findById( $id ) {
        try {
            $sql = "SELECT * FROM cadastros WHERE id = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $id );
            $stmt->execute();
            $cliente = $stmt->fetch( PDO::FETCH_ASSOC );
            return $cliente;
        } catch ( PDOException $e ) {
            echo "Erro ao listar o cliente: ", $e->getMessage();
        }
    }

    public function update( ClienteDTO $clienteDTO ) {
        try {
            $sql = "UPDATE cadastros SET "
                . "nome=?, email=?, telefone=?, password=? "
                . "WHERE id=?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $clienteDTO->getNome() );
            $stmt->bindValue( 2, $clienteDTO->getEmail() );
            $stmt->bindValue( 3, $clienteDTO->getTelefone() );
            $stmt->bindValue( 4, $clienteDTO->getPassword() );
            $stmt->bindValue( 5, $clienteDTO->getId() );
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar: ", $e->getMessage();
        }
    }

    public function findByCpf( $cpf ) {
        try {
            $sql = "SELECT * FROM cadastros WHERE cpf = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $cpf );
            $stmt->execute();
            $cliente = $stmt->fetch( PDO::FETCH_ASSOC );
            return $cliente;
        } catch ( PDOException $e ) {
            echo "Erro ao listar o cliente: ", $e->getMessage();
        }
    }

}