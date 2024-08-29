<?php       

class Escola{
    private string $nome; 
    private string $endereco;
    private int $qtdAlunos;
    
    public function __construct($nome,$endereco,$qtdAlunos) {
        $this->setNome($nome);
        $this->setEndereco($endereco);
        $this->setQtdAlunos($qtdAlunos);
    }
    public function __toString()
    {
        return sprintf("\nNome -> %s\nEndereço->%s\nQuantidade de alunos -> %d",$this->nome,$this->endereco,$this->qtdAlunos);
    }
    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of qtdAlunos
     */
    public function getQtdAlunos()
    {
        return $this->qtdAlunos;
    }

    /**
     * Set the value of qtdAlunos
     */
    public function setQtdAlunos($qtdAlunos): self
    {
        $this->qtdAlunos = $qtdAlunos;

        return $this;
    }
}

//1.1 Resolvido
$escolas = array();
for ($i=0; $i < 4; $i++) { 
    $nome = readline(($i+1)."-Nome escola :");
    $endereco = readline(($i+1)."- Endereço escola " . $nome .": ");
    $qtdAlunos = readline(($i+1)."-Quantidades de alunos da escola ". $nome .": ");
    array_push($escolas, new Escola($nome,$endereco,$qtdAlunos));
}
//1.2 resolvendo
foreach ($escolas as $escola ) {
    echo "\nEscola ".$escola->getNome();
    echo  $escola."\n";
}
//1.3 resolvendo
$escolaMaisAlunos = $escolas[1];

foreach ($escolas as $escola) {
    if ($escola->getQtdAlunos() > $escolaMaisAlunos->getQtdAlunos()) {
        $escolaMaisAlunos = $escola;
    }
}

echo "\nEscola com mais alunos: \n";
echo $escolaMaisAlunos;