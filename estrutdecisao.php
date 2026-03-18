<?php 

	$operacao = 4;
	$num1 = 40;
	$num2 = 60;

	switch($operacao){
		case 1:
				$resp = $num1 + $num2;
				$nomeOp = "soma";
				
			break;
		case 2:
				$resp = $num1 - $num2;
				$nomeOp = "subtraçao";
				
			break;	
		case 3:
				$resp = $num1 * $num2;
				$nomeOp = "multiplicacao";
				
			break;
		case 4: 
				if ($num2 == 0) {
					$nomeOp = "operacao é invalida";
					$resp = "impossivel a divisao por 0";

				} else {
					$resp = $num1 / $num2;
					$nomeOp = "divisao";
				}
				
				
				
			break;					

		
		default: echo "sair";
			break;
	}
	echo("A $nomeOp de $num1 e $num2 é $resp");


 ?>