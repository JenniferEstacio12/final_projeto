<?php
require_once '../dto/ClienteDTO.php';
require_once '../dao/ClienteDAO.php';
include '../js/funcao.php';

// $id = $_POST["id"];
// $cpf = removerFormatoCpfCnpj( $_POST["cpf"] );
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$password = $_POST["password"];

$clienteDTO = new ClienteDTO();
$clienteDTO->setId( $id );
$clienteDTO->setNome( $nome );
$clienteDTO->setEmail( $email );
$clienteDTO->setTelefone( $telefone );
$clienteDTO->setPassword( $password );

$clienteDAO = new ClienteDAO();
$cliente = $clienteDAO->findByCpf( $email );

$error[1] = "Cadastrado com sucesso!";
$error[2] = "Já existe um cliente cadastro com o email";

if ( empty( $cliente ) ) {
    if ( $clienteDAO->salvar( $clienteDTO ) ) {
        header( "Location: ../view/formCadastrarCliente.php?msg={$error[1]}" );
    }
} else {
    header( "Location: ../view/formCadastrarCliente.php?msg={$error[2]}" );
}
