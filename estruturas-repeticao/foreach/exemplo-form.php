<form>

	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="enviar">

</form>

<?php

if (isset($_GET)){

foreach ($_GET as $key => $value) {//key=inputs, nome dos campos - value=o que a pessoa digitou nos campos

	echo "Nome do campo: ".$key."<br>";

	echo "Valor do campo: ".$value;

	echo "<hr>";

}

}

?>