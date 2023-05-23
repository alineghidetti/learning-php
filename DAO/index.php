<?php

require_once("config.php");

//$sql=new Sql();

//$usuarios=$sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//carrega um usuario
//$luna = new Usuario();
//$luna->loadById(4);
//echo $luna;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuario usando o login e a senha
$usuario= new Usuario();
$usuario->login("luna", "210120");

echo $usuario;
?>