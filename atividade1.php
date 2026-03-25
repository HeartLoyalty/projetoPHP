<?php 
	$aluno1;
	$a1nota1 = 7.0;
	$a1nota2 = 5.0;
	$media1 = ($a1nota1 + $a1nota2) / 2;

	$aluno2;
	$a2nota1 = 4.0;
	$a2nota2 = 3.0;
	$media2 = ($a2nota1 + $a2nota2) / 2;

	$aluno3;
	$a3nota1 = 8.0;
	$a3nota2 = 9.0;
	$media3 = ($a3nota1 + $a3nota2) / 2;

	$aluno4;
	$a4nota1 = 2.0;
	$a4nota2 = 6.0;
	$media4 = ($a4nota1 + $a4nota2) / 2;

	$aluno5;
	$a5nota1 = 6.0;
	$a5nota2 = 10.0;
	$media5 = ($a5nota1 + $a5nota2) / 2;
	
	$aluno6;
	$a6nota1 = 5.0;
	$a6nota2 = 1.0;
	$media6 = ($a6nota1 + $a6nota2) / 2;

	$r = 0;
	$e = 0;
	$a = 0;

	if ($media1 < 3.0) {
		$aluno1 = "reprovado";
		$r = $r + 1;
	}else if($media1 < 7.0){
		$aluno1 = "Exame";
		$e = $e + 1;
	}else{

		$aluno1 = "Aprovado";
		$a = $a + 1;
	}

	if ($media2 < 3.0) {
		$aluno2 = "reprovado";
		$r = $r + 1;
	}else if($media2 < 7.0){
		$aluno2 = "Exame";
		$e = $e + 1;
	}else{

		$aluno2 = "Aprovado";
	$a = $a + 1;
	}

	if ($media3 < 3.0) {
		$aluno3 = "reprovado";
		$r = $r + 1;
	}else if($media3 < 7.0){
		$aluno3 ="Exame";
		$e = $e + 1;
	}else{
		$aluno3 = "Aprovado";
	$a = $a + 1;
	}


	if ($media4< 3.0) {
		$aluno4 = "reprovado";
		$r = $r + 1;
	}else if($media4< 7.0){
		$aluno4 ="Exame";
		$e = $e + 1;
	}else{
		$aluno4 = "Aprovado";
	$a = $a + 1;
	}


	if ($media5 < 3.0) {
		$aluno5 = "reprovado";
		$r = $r + 1;
	}else if($media5 < 7.0){
		$aluno5 = "Exame";
		$e = $e + 1;
	}else{
		$aluno5 = "Aprovado";
	$a = $a + 1;
	}


	if ($media6 < 3.0) {
		$aluno6 = "reprovado";
		$r = $r + 1;
	}else if($media6 < 7.0){
		$aluno6 = "Exame";
		$e = $e + 1;
	}else{
		$aluno6 = "Aprovado";
		$a = $a + 1;
	}
	$classMedia = ($media1 + $media2 + $media3 + $media4 +   $media5 + $media6)/6; 	
		echo "aluno1 $aluno1 media: $media1</br>
				aluno2 $aluno2 media: $media2</br>
				aluno3 $aluno3 media: $media3</br>
				aluno4 $aluno4 media: $media4</br>
				aluno5 $aluno5 media: $media5</br>
				aluno6 $aluno6 media: $media6</br>";
		echo "alunos aprovados: $a</br>
				alunos em exame: $e</br>
				alunos reprovados: $r</br>
				media total da clase: $classMedia</br>";
 ?>

 <?php 

 $media;


 for ($aluno=1; $aluno <=6 ; $aluno++) { 
 		for ($notas=1; $notas <=2 ; $notas++) { 
 				$media = ($nota1 + $nota2) /2
 		}
 }
 
  ?>