<?php

//função recursiva

//criamos um segundo array porque para cada cargo temos um objeto, e o array de fora é o array de objetos

$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			//INÍCIO: DIRETOR COMERCIAL
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => array(
					//INÍCIO: GERENTE DE VENDAS
					array(
						'nome_cargo' => 'Gerente de Vendas'
					)
					//TÉRMINO: GERENTE DE VENDAS
				)
			),
			//TÉRMINO: DIRETOR COMERCIAL	
			//INÍCIO: DIRETOR FINANCEIRO
			array(
				'nome_cargo' => 'Diretor Financeiro',
				'subordinados' => array(
					//INÍCIO: GERENTE DE CONTAS A PAGAR
					array(
						'nome_cargo' => 'Gerente de Contas a Pagar',
						'subordinados' => array(
							//INÍCIO: SUPERVISOR DE PAGAMENTOS
							array(
								'nome_cargo' => 'Supervisor de Pagamentos'
							)
							//TÉRMINO: SUPERVISOR DE PAGAMENTOS
						)
					),
					//TÉRMINO: GERENTE DE CONTAS A PAGAR
					//INÍCIO: GERENTE DE COMPRAS
					array(
						'nome_cargo' => 'Gerente de Compras',
						'subordinados' => array(
							//INÍCIO: SUPERVISOR DE SUPRIMENTOS
							array(
								'nome_cargo' => 'Supervisor de Suprimentos',
								'subordinados' => array(
									array(
										'nome_cargo' => 'comprador'
									)
								)
							)
							//TÉRMINO: SUPERVISOR DE SUPRIMENTOS
						)

					)
					//TÉRMINO: GERENTE DE COMPRAS
				)
			)
			//TÉRMINO: DIRETOR FINANCEIRO
		)
	)
);

function exibe($cargos){


	$html = '<ul>';

	foreach ($cargos as $cargo){
		
		$html .= "<li>";

		$html .= $cargo['nome_cargo'];

		$html .= "</li>";

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

			$html .= exibe($cargo['subordinados']);
		}


	}

	$html .= "</ul>";

	return $html;

}

echo exibe($hierarquia);

?>