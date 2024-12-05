<?php 
require_once "models/Livro.php";
require_once "models/Balde.php";
require_once "models/Computador.php";

$balde = new Balde("descrição do balde",20,20);
$livro = new Livro("descrição do livro",2,"Maria");
$computador = new Computador("descrição do computer",78,"i5","256");
$produto = new Produto("descrição do produto",60);
$produtos = [$balde,$livro,$computador,$produto];
foreach ($produtos as $produto) {
    echo  $produto->getDados();
}
?>