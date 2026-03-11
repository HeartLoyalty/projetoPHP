<?php 
$nome = "Edilson"; //variavel local.

function exibir(){
	$nome = "Adilson"; //variavel local da função

	echo "Valor da variavel dentro da função ".$nome;

}
exibir(); // chamada da função

echo "<br/> A variavel fora da função é ". $nome;

 ?>