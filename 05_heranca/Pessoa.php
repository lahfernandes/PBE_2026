<?php

class Pessoa{
    protected $nome;
    protected $email;

    public function __construct($nome, $email){
        $this->nome = $nome;
        $this->email = $email;
    }
    
    // método que busca e retorna o nome do objeto
    public function getNome(){
        return $this->nome;
    }

    // método que atualiza o nome
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    // método que busca e retorna o email do objeto
    public function getEmail(){
        return $this->email;
    }
    
    // método para atualizar o email
    public function setEmail($email){
        $this->email = $email;
    }
    
    // método para exibir todos os dados 
    // normalmente chamado de toString()
    public function exibirDadosPessoa(){
        echo "Nome: $this->nome <br> Email: $this->email <br>";
    }
}