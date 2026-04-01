<?php 

 	$media = 0;
	$r = 0;
	$e = 0;
	$a = 0;
	$nota = 0;
	$soma = 0;
	$totalMedia = 0;

 for ($aluno=1; $aluno <=6 ; $aluno++) { 
 		for ($notas=1; $notas <=2 ; $notas++) { 
 				$nota = 6;
 				$soma = $soma + $nota;
 		}
 		 $media = $soma/2;

 		if ($media < 3.0) {
		$aluno1 = "reprovado";
		$r =  $r + 1;
	}else if($media < 7.0){
		$aluno = "Exame";
		$e = $e + 1;
	}else{

		$aluno = "Aprovado";
		$a = $a + 1;
	}
 		echo "aluno $aluno media: $media</br>";
 		$totalMedia = $totalMedia + $media;
 }
		$totalMedia = $totalMedia/6;

 		echo "alunos aprovados: $a</br>
				alunos em exame: $e</br>
				alunos reprovados: $r</br>
				media total da clase: $totalMedia</br>";
 ?>

 
