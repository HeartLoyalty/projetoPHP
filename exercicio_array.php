<?php 
$numeros = array(10,-26,58,66,-89,-17,1,-10,-4);
for ($i=0; $i <=count($numeros) ; $i++) { 
	if ($numeros[$i]>0) {
		echo "numeros positivos <br>";
		echo ($numeros[$i]."<br>");
	}else{
		echo "numeros negativos <br>";
		echo ($numeros[$i]."<br>");
	}
	if ($numeros[$i] % 2 == 0) {
		echo "numeros pares <br>";
		echo ($numeros[$i]."<br>");
	}else{
		echo "numeros impares <br>";
		echo ($numeros[$i]."<br>");
	}



}
 ?>