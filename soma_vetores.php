<?php
$num1 = array(10,20,30,40);
$num2 = array(50,60,70,80);
$resp = array(0,0,0,0);
$number = 0;

echo "a soma de dois vetores<br>";

for ($i=0; $i <4 ; $i++) { 
	echo ($num1[$i]." " );
}
echo"<br>";
for ($i=0; $i <4 ; $i++) { 
	echo ($num2[$i]." " );
}






for ($i=0; $i<4; $i++){ 
$resp[$i] = $num1[$i] + $num2[$i];
	
}
echo "<br>é <br>";
for ($i=0; $i <4 ; $i++) { 
	echo($resp[$i]." ");
}

	
 
 ?>