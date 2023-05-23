<?php

spl_autoload_register(function($nameclass){ #quando for executado o config no autoload, vamos receber no nome da classe o nome do namespace /o nome da classe
	var_dump($nameclass);
	echo "<br/>";
//diretorio de classes
	$dirclass = "class";
	$filename = $dirclass. DIRECTORY_SEPARATOR . $nameclass . ".php";

	if (file_exists($filename))
	{
		require_once($filename);
	}

})
?>