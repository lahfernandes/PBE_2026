<?php

class Aluno{
    public $nome;
    public $nota1;
    public $nota2;
    public $media;

    public function __construct($nome, $nota1, $nota2){
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->media = $this->media();
    }

    public function media(){
        return ($this->nota1 + $this->nota2) / 2;
    }
}

$aluno = new Aluno("Lavinia", 8, 9);
echo"<pre>";
print_r($aluno);
echo"</pre";

?>

