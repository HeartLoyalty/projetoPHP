<?php 
$num1 = 10;
$num2 = 0;
$op = 4;
$operacao = "operacao";
function somar($num1, $num2){
	return ($num1 + $num2);
}
function subtrair($num1, $num2){
	return ($num1 - $num2);
}

function multiplicar($num1, $num2){
	return ($num1 * $num2);
}
function dividir($num1, $num2){
	return ($num1 / $num2);
}
function definirOperacao($op){
	if ($op == 1) {
	$operacao = "soma";
		}else if ($op == 2) {
	$operacao = "subtração";
		}else if ($op == 3) {
	$operacao = "multiplicação";
		}else if ($op == 4) {
	$operacao = "divisao";
	}
	return $operacao;
}



switch ($op) {
	case 1: 
		$resultado = somar($num1, $num2);
		break;
	case 2: 
		$resultado = subtrair($num1, $num2);		
		break;
	case 3: 
		$resultado = multiplicar($num1, $num2);	
		break;
		case 4: if ($num2 == 0) {
		echo "impossivel a divisao por zero <br>";
			$resultado = "undefined";
			}else{

			$resultado = dividir($num1, $num2);
		}
		break;
	default:
	
		
		break;
}

echo "a ". definirOperacao($op), " de $num1 e $num2 é $resultado";

 ?>