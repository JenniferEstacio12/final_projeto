<?php
require_once '../dto/ClienteDTO.php';
require_once '../dao/ClienteDAO.php';

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$password = $_POST["password"];

$clienteDTO = new ClienteDTO();
$clienteDTO->setId( $id );
$clienteDTO->setNome( $nome );
$clienteDTO->setEmail( $email );
$clienteDTO->setTelefone( $telefone);
$clienteDTO->setPassword( $password);

$clienteDAO = new ClienteDAO();

if ( $clienteDAO->update( $clienteDTO ) ) {
    header( "Location: ../view/listarTodosClientes.php" );
}