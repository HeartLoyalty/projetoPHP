<?php 
$num1 = array(10,20,30,40);
$num2 = array(50,60,70,80);
$number = 0;

echo ("a soma dos valores do vetor <br>");
for ($i=0; $i <4 ; $i++) { 
	echo ($num1[$i]."<br>" );

}

for ($v=0; $v <4; $v++ ) { 
		$number += $num1[$v];

	}
	echo("é ". $number. "<br>");

	echo ("a soma dos valores do vetor <br>");
for ($i=0; $i <4 ; $i++) { 
	echo ($num2[$i]."<br>" );

}

for ($v=0; $v <4; $v++ ) { 
		$number += $num2[$v];

	}
	echo("é ". $number);
 ?>