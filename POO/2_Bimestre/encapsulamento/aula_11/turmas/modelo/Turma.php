<?php 

class Turma {
    private string $nome;
    private string $curso;
    private array  $alunos;

    
    public function __construct($nome,$curso) {
        $this->nome = $nome;
        $this->curso = $curso;
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
    public function setNome(string $nome) 
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of curso
     */
    public function getCurso(): int
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     */
    public function setCurso(int $curso): self
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Set the value of alunos
     */
    public function setAlunos(array $alunos): self
    {
        $this->alunos = $alunos;

        return $this;
    }

    /**
     * Get the value of alunos
     */
    public function getAlunos(): array
    {
        return $this->alunos;
    }
}

?>