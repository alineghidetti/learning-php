<?php

$nome1 = "ALINE";

$sobrenome = "GHIDETTI";

$nomeCompleto = $nome1. " " . $sobrenome; //concatenacao de variaveis

echo $nomeCompleto;

exit; //programa para aqui

echo $nome1;

echo "<br/>"; //quebra uma linha

unset($nome1); //limpa variavel

if (isset($nome1)) { //verifica existencia da variavel antes de executar

	echo $nome1;
}

?>