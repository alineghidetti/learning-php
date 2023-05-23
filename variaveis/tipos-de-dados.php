<?php

//tipos basicos

$nome = "Hcode"; //string
$site = 'www.hcode.com.br'; //string

//diferenca "" e ''

$ano = 1990; //number
$salario = 5500.99; //float
$bloqueado = false; //boolean

///////////////////////////////////////////////////

//tipos compostos

$frutas = array("abacaxi", "morango", "manga", "banana"); //array

//quero imprimir a manga

//echo $frutas[2];

//Lista é um conjunto de valores que possuem uma certa sequência, mas a forma exata de organização na memória e acesso a ela não é definido. Uma lista deve aceitar novos elementos. Um array não costuma aceitar.

$nascimento = new DateTime(); //objeto
//toda vez que tiver a palavra new, orientação a objeto esta sendo usada
//construtor vazio do datetime pega a data de agora

//var_dump($nascimento);

///////////////////////////////////////////////////
 
//tipos especiais

$arquivo = fopen("tipos-de-dados.php", "r");

var_dump ($arquivo);

$nulo = NULL; //nao existe, ausencia de valor, uma variavel se torna null quando é apagada
$vazio = ""; //foi iniciado, so nao contem informacao mas reserva espaco na memoria

?>