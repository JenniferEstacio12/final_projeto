<?php

class ClienteDTO {
    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $password;

    public function getId() {
        return $this->id;
    }
    public function setId( $id ) {
        $this->id = $id;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome( $nome ) {
        $this->nome = $nome;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail( $email ) {
        $this->email = $email;
    }
    public function getTelefone() {
        return $this->telefone;
    }
    public function setTelefone( $telefone ) {
        $this->telefone = $telefone;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword( $password ) {
        $this->password = $password;
    }
}