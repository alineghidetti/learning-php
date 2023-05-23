<?php

$a = 10;

function trocaValor ($b){ //usando (&$b) mudamos o valor da variável na memória, alteramos o último valor
//é diferente de variáveis globais, aqui afetamos apenas o valor pelo endereço dela

	$b += 50;

	return $b;

}

echo trocaValor($a); //60
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a; 
//10

//o que acontece na funçao fica na função

?>