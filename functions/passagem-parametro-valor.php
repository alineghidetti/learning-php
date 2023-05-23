<?php

$a = 10;

function trocaValor ($b){

	$b += 50;

	return $b;

}

echo trocaValor($a); //60
echo "<br>";
echo $a; 
//10

//o que acontece na funçao fica na função

?>