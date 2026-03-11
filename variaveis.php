<?php 
$data = "10 de março de 2026"; 	//string
$salario = 850.00; 				//float ou double
$cargo = "Estagiario"; 			// string
$idade = 18; 					//int
$resultado = false; 				//boolean

if (!$resultado) {				//condicional true
	print("$data <br/> $salario <br/> $cargo <br/> $idade <br/> $resultado");
}

echo "Arquivo criado em $data <br/>" ;

printf("Salario minimo: R$ %.2f <br/>", $salario);  // formatação para numero flutuante.
$texto = sprintf("%s recebe R$ %.2f por mês", $cargo, $salario * 2 );// formatação para string atribuida a uma variavel.


echo $texto; // retornando a variavel formatada.


 ?>