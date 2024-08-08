<?php 
 class Aluno{
    //Atributos
    private $nome;
    private $nota1;
    private $nota2;
    //Métodos
    public function __construct($nome,$nota1,$nota2) {
        $this->setNota1($nota1);
        $this->setNome($nome);
        $this->setNota2($nota2);
    }
    public function retornarMedia(){
       
           return "\nO aluno ".$this->getNome()." teve como primeira nota ".$this->getNota1().", e sua segunda nota foi ". $this->getNota2()."\nSendo sua média igual a ". $this->calcularMedia();
        
    }
    public  function calcularMedia(){
        return ($this->getNota1() + $this->getNota2())/2;
    }
    //GETTERS AND SETTERS
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
     * Get the value of nota1
     */
    public function getNota1()
    {
        return $this->nota1;
    }

    /**
     * Set the value of nota1
     */
    public function setNota1($nota1): self
    {
        $this->nota1 = $nota1;

        return $this;
    }

    /**
     * Get the value of nota2
     */
    public function getNota2()
    {
        return $this->nota2;
    }

    /**
     * Set the value of nota2
     */
    public function setNota2($nota2): self
    {
        $this->nota2 = $nota2;

        return $this;
    }
 }

 $aluno1 = new Aluno("Pedro",22,22);
 $aluno2 = new Aluno("Maria",12,23);
 $aluno3 = new Aluno("José",2,22);
 $arrayAlunos = [$aluno1, $aluno2, $aluno3];
 foreach ($arrayAlunos as $aluno) {
    echo $aluno->retornarMedia($aluno);
}
?>