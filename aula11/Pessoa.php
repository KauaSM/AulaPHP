<?php
class Pessoa
{
    public $nome;
    public $idade;
    private $cpf;

    public function __construct($nome, $idade, $cpf)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }

    public function saudacao()
    {
        return "Olá, meu nome é {$this->nome} e eu tenho {$this->idade} anos.
        CPF: {$this->cpf}";
    }
}
