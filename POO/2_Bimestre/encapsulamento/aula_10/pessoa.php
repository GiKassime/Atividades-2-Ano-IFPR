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
        return sprintf(" %s %s, %d anos",$this->getNome(),$this->getSobrenome(),$this->getIdade());
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
    echo"\n****Menu****\n1- Cadastrar Pessoa\n2-Listar Pessoas\n3-Excluir Pessoa\n0-SAIR\n";
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
                        foreach ($lista as $i => $pessoa) {
                        echo ($i+1) . $pessoa. "\n";
                        }
                    }
                 break;
                 case '3':
                    if (!count($lista)) {
                    echo "\nLista vazia\n";
                    }else{
                        echo "\nLista\n";
                        foreach ($lista as $i => $pessoa) {
                        echo ($i+1) . $pessoa. "\n";
                        }
                        $pessoa_excluida = readline("Digite o número da pessoa a ser excluida:");
                        if ($pessoa_excluida > count($lista) || $pessoa_excluida < count($lista)) {
                            echo"\nPessoa não cadastrada!!!\n";
                        }else{
                            echo "\n".$lista[($pessoa_excluida - 1)]." FOI EXCLUIDO!\n";
                            array_splice($lista,($pessoa_excluida - 1));
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
