<?php

$frase = "A repetição é a mãe da retenção.";

$palavra = 'mãe';

//qual a palavra que estou procurando

$query = strpos($frase, $palavra);

//var_dump($query);

//digamos que quero apenas o texto ATÉ mãe

$texto = substr($frase, 0, $query); //variavel, a partir de onde procurar, até onde

var_dump($texto);

//se eu quiser o texto após a palavra mãe

//$texto = substr($frase, $query+3); //usando q+3 a palavra mãe não será inclusa

//outra forma de fazer

$texto2  = substr($frase, $query + strlen($palavra), strlen($frase)); //começa a partir de palavra + 3 letras (strlen conta) e vai até o fim da frase

echo "<br>";

var_dump($texto2);


?>