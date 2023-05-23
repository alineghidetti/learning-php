<?php

function __autoload($nomeClasse)//vai atribuir a essa variável o valor de DelRey #autoload, função mágica - recebe uma variavel/parametro que é o nome da classe que foi chamada

#tudo deu certo porque estamos na mesma página

{
	var_dump($nomeClasse);
	require_once("$nomeClasse.php"); //procura na pasta htdocs um arquivo com extensão php com o mesmo nome da classe
}


$carro = new DelRey();

$carro->acelerar(80);

?>