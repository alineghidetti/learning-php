<?php

require_once("config.php");

echo session_save_path(); 
//Obtém e/ou define o caminho para armazenamento da sessão atual

echo "<br>";

var_dump(session_status());

//valores retornados pelo session status
// php_session_disabled
// php_session_none
// php_session_active

echo "<br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "as sessões estão desabilitadas";
		break;

	case PHP_SESSION_NONE:
		echo "as sessões estão habilitadas, mas nenhuma existe";
		break;
	
	case PHP_SESSION_ACTIVE:
		echo "as sessões estão habilitadas e uma existe";
		break;
}

?>