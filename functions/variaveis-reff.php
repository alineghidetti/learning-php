<?php

$pessoa = array(
	'nome' => 'Aline',
	'idade' => 20
);

foreach ($pessoa as $value) { //sem o & ele só altera dentro do for

	if (gettype($value) === 'integer') $value += 10; //gettype retorna o tipo de dado da variavel

	echo $value.'<br>';

}

print_r($pessoa);

?>