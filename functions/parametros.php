<?php

//parâmetros de função

function ola($texto = "mundo", $periodo = "Bom dia"){

	return "Olá $texto! $periodo<br>";
}

//valores obrigatórios precisam ficar à esquerda

echo ola();
echo ola("","Boa noite");
echo ola("mundo", "");
echo ola("Luna", "Boa tarde");

?>