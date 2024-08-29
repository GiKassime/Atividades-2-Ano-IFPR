<?php

class Pessoa{
    private string $nome;
    private string $sobrenome;
    private int $idade;

    public function __construct($nome,$sobrenome,$idade){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->idade = $idade;
    }
    public function __toString()
    {
        return sprintf("%s %s, %d anos",$this->getNome(),$this->getSobrenome(),$this->getIdade());
    }
    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }
    
    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome(string $sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}
$lista = array();
while (true) {
  do {
    echo"\n1- Cadastrar Pessoas\n2-Listar Pessoas\n0-SAIR\n";
    $op = readline("Escolha uma opção: ");
           switch ($op) {
               case '1':
                    echo "\nCadastro\n";
                    $nome = readline("Digite o nome: ");
                    $sobrenome = readline("Digite o sobrenome: ");
                    $idade = readline("Digite a idade: ");
                    array_push($lista, new Pessoa($nome,$sobrenome,$idade));
                    echo "\nPessoa Cadastrada com sucesso!\n";
                   break;
               case '2':
                   if (!count($lista)) {
                    echo "\nLista vazia\n";
                    }else{
                        echo "\nLista\n";
                        foreach ($lista as $pessoa) {
                        echo $pessoa. "\n";
                        }
                    }
                 break;
               case '0':
                   echo "\nSaindo......";
                   die();
                   break;
               default:
                   echo "\nValor inválido\n";
                   break;
           }
    } while ($op != 0);


}
