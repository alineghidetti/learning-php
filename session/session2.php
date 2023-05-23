<?php

require_once("config.php");

//session_unset($_SESSION['nome']); //session unset sem a variavel apaga todas as variáveis de seção

//session_destroy($_SESSION);

//session_unset limpa as variáveis de seção e mantém o usuário
//session_destroy limpa a variável e remove o usuário

//nos navegadores mais antigos se tivesse o nivel de segurança muito alto ele não permitiria que o site criasse um arquivo temporário na minha maquina e as variáveis de seção nao funcionam

echo $_SESSION['nome'];

?>