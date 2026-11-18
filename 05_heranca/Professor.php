<?php

require_once "Pessoa.php";
class Professor extends Pessoa{
    private $disciplina;

    public function __construct($nome, $email, $disciplina){
        $this->disciplina = $disciplina;
        // executa o construtor da class Pessoa
        // passando os seus atributos
        parent::__construct($nome, $email);
    }

    // método para buscar a disciplina 
    public function getDisciplina(){
        return $this->disciplina;
    }

    // exibir todos os dados do professor
    public function exibirDadosProfessor(){
        parent::exibirDadosPessoa();
        echo "Disciplina $this->disciplina <br><hr>";
    }
}