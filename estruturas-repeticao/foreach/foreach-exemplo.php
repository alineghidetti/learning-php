<?php

//foreach = para cada item que exista, execute

$meses = array(
	"janeiro","fevereiro", "março","abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"
);

//foreach ($meses as $mes) {
		
//		echo "O mês é: ".$mes. '<br>'; //foreach simples, para saber em qual posição está}

foreach ($meses as $index => $mes) {
	echo "O mês de número: "."$index"."<br>";
	echo "é "."$mes"."<br>";


}


?>