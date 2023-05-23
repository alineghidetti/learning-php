<?php

class Usuario {

	private $idusuarios;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	//depois de criar os privates --> geters and setters

	public function getIdusuarios(){
		return $this->idusuarios;
	}

	public function setIdusuarios($value){
		$this->idusuarios = $value;
	}

	public function getDeslogin(){
		return $this->deslogin;
	}

	public function setDeslogin($value){
		$this->deslogin = $value;
	}

	public function getDessenha(){
		return $this->dessenha;
	}

	public function setDessenha($value){
		$this->dessenha = $value;
	}

	public function getDtcadastro(){
		return $this->dtcadastro;
	}

	public function setDtcadastro($value){
		$this->dtcadastro = $value;
	}

	public function loadById($id){

		$sql = new Sql();

		$results=$sql->select("SELECT * FROM tb_usuarios WHERE idusuarios = :ID", array(
			":ID"=>$id //chave = valor
		));

		//validar se results existe, se o id existe e é > 0

		if (count($results) > 0) {

			$row = $results[0]; //se results no indice 0 existe

			$this->setIdusuarios($row['idusuarios']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));
		}
	}

public static function getList (){ //metodo estático, nao precisara ser instanciado

	$sql = new Sql();

	return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
}

public function search($login){

	$sql = new Sql();

	return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array (
		':SEARCH'=>"%%".$login."%%" //o que eu digitar em login vai adicionar % antes e depois
	));
}

//obter dados do usuario autentiicados

public function login($login, $password){

	$sql = new Sql();

	$results=$sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(

		":LOGIN"=>$login,
		":PASSWORD"=>$password
	));	

		if (count($results) > 0) {

			$row = $results[0]; //se results no indice 0 existe

			$this->setIdusuarios($row['idusuarios']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));
		}
		else {
			throw new Exception ("Login e/ou senha inválidos.");
		}

}



public function __toString(){

	return json_encode(array(
		"idusuarios"=>$this->getIdusuarios(),
		"deslogin"=>$this->getDeslogin(),
		"dessenha"=>$this->getDessenha(),
		"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")

	));
}

}

?>