<?php
//escopo de varivel 

$nome = "Aline"; //ao rodar o programa com a variavel declarada aqui ela nao funciona na funcao

function teste () {

	global $nome; //nome aqui e nome fora é a mesma variavel

	echo $nome;

}

function teste2 (){

	$nome = "Luna";

	echo $nome. " ". "agora no teste 2";

}

teste();

echo "<br/>";

teste2();

?>