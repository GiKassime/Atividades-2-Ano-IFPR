<?php

class Carta {
    private int $numero;
    private string $nome;    
    public function __construct($numero,$nome) {
        $this->numero = $numero;
        $this->nome = $nome;
    }
    public function __toString()
    {
        return "Carta: {$this->numero} de {$this->nome}";
    }
    public function gerarDica($dica,$quantCartas) {
        switch($dica) {
            case "1":
                if($this->nome == "Copas" || $this->nome == "Ouros") {
                    return "É um naipe de cor vermelha";
                }else{
                    return "É um naipe de cor preta";
                }
            break;
            case "3":
                if($this->numero <= $quantCartas/2){
                    return "É uma carta de abaixo de ".($quantCartas/2);
                }else{
                    return "É uma carta de acima de ."($quantCartas/2);
                }
            break;
            case "2":
                if($this->numero % 2 == 0) {
                    return "É um número par";
                }else{
                    return "É um número ímpar";
                }
            break;
        
        }
    }
    /**
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
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

}
$baralho = array();
$naipe = array("Paus","Copas","Ouros","Espadas");
$quantCartas = readline("Escolha a quantidade de cartas entre 2 e 52: ");//Usuário escolhe a quantidade de cartas
$chances = intdiv($quantCartas, 2);//aqui eu quero que retorne só o inteiro da divisão, para por exemplo em casos que a pessoa escolha um número ímpar, a chance n fique um float
$dica = 3;
for ($i=0; $i < $quantCartas; $i++) { 
    $baralho[] = new Carta(rand(1,13), $naipe[rand(0,3)]);
}
$cartaSorteada = array_rand($baralho,1);//sorteia um objeto carta do array baralho
do {
   echo "\n******CARTAS******";
   foreach ($baralho as $key =>$carta) {
        echo "\n".($key+1)." - ".$carta;
   }
   echo  "\n\nCHANCES: " . $chances. "\nDICAS: ". $dica;
   echo "\n1 - PEDIR DICA\n2 - JOGAR\n3 - DESISTIR\n";
   switch (readline("ESCOLHA UMA OPÇÃO: ")) {
        case 1:
            if ($dica > 0) {
                echo $baralho[$cartaSorteada]->gerarDica($dica,$quantCartas);
                $dica--;
            }else{
                echo "ACABARAM SUAS DICAS";
            }
        break;
   }
   
} while ($chances == 0);