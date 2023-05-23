<?php

function ola(){
	
	return "Olá mundo!<br>";

}

//por que colocar um return ao inves de um echo direto na função? -> código inteligente

echo ola();
$frase = ola();

echo strlen($frase);

?>