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
    public function gerarDica($dica,$indice_carta,$quantCartas) {
        $indice_carta++;
        $cartasdiv2 = intdiv($quantCartas, 2);
        switch($dica) {
            case "1":
                if($this->nome == "Copas" || $this->nome == "Ouros") {
                    return "É um naipe de cor vermelha";
                }else{
                    return "É um naipe de cor preta";
                }
            break;
            case "3":
                if($indice_carta < $cartasdiv2) {
                    return "É uma carta igual ou abaixo da metade";
                } else {
                    return "É uma carta igual ou acima da metade";
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
//Programa principal
//inicializando algumas variaveis
$naipes = array("Paus","Copas","Ouros","Espadas");
$continuar = true;
echo "\nBEM VINDO AO JOGO DE ADIVINHAÇÃO DE CARTAS DE UM BARALHO,\n";
//laço caso a pessoa quisercontinuar jofando
while ($continuar) {
    $baralho = array(); // REINICIA O BARALO
    $quantCartas = 0;
    do {
        $quantCartas = readline("Escolha uma quantidade de cartas entre 7 e 52 para começar: ");//Usuário escolhe a quantidade de cartas
    } while ($quantCartas < 7 || $quantCartas > 52);  
    $chances = intdiv($quantCartas, 2);//aqui eu quero que retorne só o inteiro da divisão, para por exemplo em casos que a pessoa escolha um número ímpar, a chance n fique um float
    $dica = 3;
    for ($i = 0; $i < $quantCartas; $i++) {   
        do { 
            $numero = rand(1, 13); 
            $naipe = $naipes[rand(0, 3)]; // Sorteia um naipe
            $existe = false;
                foreach ($baralho as $carta) {
                if ($carta->getNumero() == $numero && $carta->getNome() == $naipe) {
                    $existe = true;
                    break; // Se existir, não precisa continuar verificando
                }
            }
        } while ($existe); // Repete até encontrar uma carta que não existe
        // Adiciona carta 
        $baralho[] = new Carta($numero, $naipe); 
    }
    $cartaSorteada = array_rand($baralho,1);//sorteia um objeto Carta por índice array baralho  
    do {
        echo "\n" . str_repeat("=", 40) . "\n";
        echo "                 CARTAS          \n";
        echo str_repeat("=", 40) . "\n\n";
        
        // Exibindo as cartas
        foreach ($baralho as $key => $carta) {
            printf("       %2d - %s\n", $key + 1, $carta);
        }
        
        // Informações do status
        echo "\n" . str_repeat("-", 40) . "\n";
        // Opções do menu
        echo "                 OPÇÕES          \n";
        echo str_repeat("-", 40) . "\n";
        echo "1 - PEDIR DICA\n";
        echo "2 - JOGAR\n";
        echo "3 - DESISTIR\n";
        echo str_repeat("-", 40) . "\n";//só repete esses traços malditos mds terminal fica horrivel 
        echo sprintf("       CHANCES: %2d  |  DICAS: %2d     ", $chances, $dica) . "\n";
        echo str_repeat("-", 40)."\n" ;
        $opcao = readline("ESCOLHA UMA OPÇÃO: ");
        //switch para escolher dica, jogar ou desistir
        switch ($opcao) {
            case 1: // DICAS
                echo str_repeat("-", 40) . "\n";
                if ($dica > 0) {
                    echo "DICA -> ". $baralho[$cartaSorteada]->gerarDica($dica, $cartaSorteada + 1, $quantCartas)."\n";
                    $dica--;
                    echo "\npressione enter para continuar";
                    fgets(STDIN);
                } else {
                    echo "\nACABARAM SUAS DICAS :(\n";
                    echo "\npressione enter para continuar";
                    fgets(STDIN);
                }
                echo str_repeat("-", 40) . "\n";
                break;
            case 2: // JOGAR
                do {
                    $tentativa = (int)readline("Digite sua tentativa pelo índice das cartas: ");
                } while ($tentativa < 1 || $tentativa > $quantCartas);
                
                if ($tentativa - 1 == $cartaSorteada) {
                    echo "\nParabéns, você acertou!! A carta é " . $baralho[$cartaSorteada] . "\n\n";
                    $chances = 0;
                } else {
                    echo "\nVocê errou!\n";
                    $chances--;
                    if ($chances == 0) {
                        echo "\nGAME OVER\n";
                    } else {
                        echo "\nTente outra vez :)\n";
                    }
                    echo "\npressione enter para continuar";
                    fgets(STDIN);
                }
                break;
            case 3: // DESISTIR
                echo "Você desistiu do jogo\n";
                $chances = 0;
                break;
            default:
                echo "Opção inválida.";
                break;
        }
    } while ($chances > 0);
    // Pergunta se o usuário quer jogar novamente
    $opcao = (int)readline("1 - Jogar Novamente 2 - Sair? -> ");
    switch ($opcao) {
    case 1:
        // Reinicia o jogo
        break;
    case 2:
        echo "\nObrigado por jogar :)";
        $continuar = false; 
        break;
    default:
        echo "Opção inválida.\n";
        break;
}
}

