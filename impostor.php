<?php 
$salarioBruto = 5000;

if ($salarioBruto <= 2428.80) {
	echo "isento de imposto";
} 
if ($salarioBruto > 2428.80 && $salarioBruto <= 2826.65 ) {
	
	$salarioLiq = $salarioBruto-($salarioBruto * 7.5 / 100);
	$valorImposto = $salarioBruto - $salarioLiq;


	echo ("Salario bruto é $salarioBruto,
			desconto aplicado: 7,5%
			valor do desconto é $valorImposto,
			salario liquido é $salarioLiq
			");
}
if ($salarioBruto > 2826.65 && $salarioBruto <= 3751.05) {
	
	$salarioLiq = $salarioBruto-($salarioBruto * 15 / 100);
	$valorImposto = $salarioBruto - $salarioLiq;


	echo ("Salario bruto é $salarioBruto,
			desconto aplicado: 15%
			valor do desconto é $valorImposto,
			salario liquido é $salarioLiq
			");
}
if ($salarioBruto > 3751.05 && $salarioBruto <= 4664.68) {
	
	$salarioLiq = $salarioBruto-($salarioBruto * 22.5 / 100);
	$valorImposto = $salarioBruto - $salarioLiq;


	echo ("Salario bruto é $salarioBruto,
			desconto aplicado: 22.5%
			valor do desconto é $valorImposto,
			salario liquido é $salarioLiq
			");
}
if ($salarioBruto > 4664.68) {
	
	$salarioLiq = $salarioBruto-($salarioBruto * 27.5 / 100);
	$valorImposto = $salarioBruto - $salarioLiq;


	echo ("Salario bruto é $salarioBruto,
			desconto aplicado: 27.5%
			valor do desconto é $valorImposto,
			salario liquido é $salarioLiq
			");
	}
 ?>