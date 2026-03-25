<?php 
$quantRequire;

for ($mesa=1; $mesa <= 40 ; $mesa++) { 
	for ($cadeiras=1; $cadeiras <= 6 ; $cadeiras++) { 
			if ($cadeiras == $quantRequire) {
				echo "mesa reservada";
				echo "mesa", $mesa;
			}
	}
}



 ?>