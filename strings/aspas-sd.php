<?php

$nome = "Aline";

$nome2 = 'Ghidetti';

var_dump($nome, $nome2); //mostra as duas da mesma maneira

//qual a diferenca?

//usando "" colocando na variavel ou fazendo um echo 

echo 'ABC $nome'; //entende tudo como texto

//ABC $nome

echo "ABC $nome"; //faz uma busca no codigo pra ver se contem variavel - interpolação de variavel (recurso do php)

//ABC Aline


?>
