<?php 
$mesaReservada;
$cadeirasOcupadas = 0;
$cadeirasSelecionadas = false;
$opcao = 0;
$mesaSelecionada = 0;

 	while($mesaSelecionada !=0 || $cadeirasOcupadas != 240 ){	

 		if (!$mesaSelecionada true ||  ) {
 	
		for ($mesa=$mesaSelecionada; $mesa <= 40 ; $mesa++) { 
			$mesaOcupada = false
			$cadeirasPorMesa = 6;

	for ($cadeiras=1; $cadeiras <= $cadeirasPorMesa ; $cadeiras++) { 
			$opcao;
			if($opcao == 1) {
				$cadeirasOcupadas + 1;
			}else{
				echo "Cadeiras Disponiveis";
				$mesaOcupada = false;

			}
		} 	
		if($cadeirasOcupadas == 6){
				echo "Cadeiras Idisponiveis";
				$mesaReservada = $mesaSelecionada ;
				$mesaOcupada = true;		
				}
	if ($mesaOcupada true) {
		${"mesa".$mesaReservada} = true;
	}
	

	$cadeirasOcupadas +=6;


 	}
 	if($cadeirasOcupadas == 240) {
 		echo "Sem lugares disponiveis. Programa encerrado."
 	} else{
 		echo "Programa encerrado";
 	}


}
  ?>
  
