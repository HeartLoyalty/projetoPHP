<?php 
//array de linha(chamamos de vetor)
//array de linha/coluna(chamamos de matriz)
//um array serve para guardar mais de um só valor dentro de uma variavel array.
//	$valor = ["arroz", "feijao", 10, 20];
	// ^              ^
//nome do vetor  Valores dentro dos couchetes
 //(array)
	// pode ser usada dentro qualquer tipo de valor, tanto inteiro quanto string, ou qualquer outro valor.
	$valor = array(10,20,30);
	$nomes = array('julia','ronald','matue');
	$idade = array(45,22,19);
	echo($nomes[2] . "<br>");
	echo($valor[1] . "<br>");
	echo($idade[0] . "<br>");
	var_dump($valor);
	echo "<br>";
	var_dump($nomes);
	echo "<br>";
	var_dump($idade);
	echo "<br>";
	
	$salario[] = 1500;
	$salario[] = 1250;
	$salario[] = 1240.65;
	$salario[] = 200.79;
	var_dump($salario);
	

	
	





 ?>
