<?php

namespace Cliente;

class Cadastro extends \Cadastro //a barra volta na raiz
{
	public function registrarVenda()
	{
		echo "Foi registrada uma venda para o cliente ".$this->getNome();
	}
}


?>