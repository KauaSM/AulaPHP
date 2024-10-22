<?php

class PessoaA
{
    private $nome;
    private $idade;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getIdade()
    {
        return $this->idade;
    }
}

$pessoa = new PessoaA();
$pessoa->setNome("Alice");
$pessoa->setIdade(25);

echo "Nome: " . $pessoa->getNome();
echo "Idade: " . $pessoa->getIdade();
