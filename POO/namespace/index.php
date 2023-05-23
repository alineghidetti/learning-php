<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad-> setNome("Luna Maria");
$cad-> setEmail("Luna.Maria@gatos.com");
$cad-> setSenha("123");

$cad-> registrarVenda();

?>