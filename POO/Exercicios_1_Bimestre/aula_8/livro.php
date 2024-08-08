<?php 

class Livro {
    //Atributos
    private $titulo;
    private $autor;
    private $genero;
    private $num_paginas;
    //Métodos
    public function __construct($titulo,$autor,$genero,$num_paginas) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTitulo($genero);
        $this->setNumPaginas($num_paginas);
    }
    public function getDados(){
        return "\nTITULO-> ".$this->getTitulo()."\nAUTOR-> ".$this->getAutor()."\nGENERO-> ".$this->getGenero()."\nNUMERO DE PÁGINAS-> ".$this->getNumPaginas();
    }
    //gettes e setters
    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of num_paginas
     */
    public function getNumPaginas()
    {
        return $this->num_paginas;
    }

    /**
     * Set the value of num_paginas
     */
    public function setNumPaginas($num_paginas): self
    {
        $this->num_paginas = $num_paginas;

        return $this;
    }
}
//Há 2 maneiras de fazer: 

$livro1 = new Livro("UNHE","sss","aaaaa",100);
$livro2 = new Livro("AAAA","aaa","aaaaa",99);
$livro3 = new Livro("SOCORRO","kkk","aaaa",89);
$arrayLivros = [$livro1, $livro2, $livro3];
$livroMaior = $arrayLivros[0];
/*
for ($i=0; $i < count($arrayLivros); $i++) { 
  if ($arrayLivros[$i]->getNumPaginas() > $livroMaior->getNumPaginas() ) {
        $livroMaior = $livro[$i];
  }
}*/
foreach ($arrayLivros as $livro) {
    if ($livro->getNumPaginas() > $livroMaior->getNumPaginas()) {
        $livroMaior = $livro;
    }
}
echo $livroMaior->getDados();
?>