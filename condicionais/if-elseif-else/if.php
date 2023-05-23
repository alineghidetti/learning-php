<?php

$qualASuaIdade = 12;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade <= $idadeCrianca){

	echo "Criança";

}else if ($qualASuaIdade <= $idadeMaior) {
	
	echo "Maior";

}else if ($qualASuaIdade < $idadeMelhor){

	echo "Adulto";

}else{

	echo "Melhor";
}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade" : "Maior de idade";

// se for verdade o parenteses, ? (entao), ; (senão)

?>