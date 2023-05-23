<?php

function trataNome ($name){

	if (!$name) {

		throw new Exception("Nenhum nome foi informado.", 500);
	}

	echo ucfirst($name)."<br>";
}

try {

	trataNome("Joao");
	trataNome("");
	
} catch (Exception $e) {

	echo $e->getMessage();

	echo "<br/>";
	
} finally {

	echo "Executou o bloco Try";

}

?>