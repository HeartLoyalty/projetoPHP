<?php 

//criando função em php, sem parametro

function somaValor(){
	echo "somando um valor";
}


//criando uma função em php com parametro

function imprimirNome($nome){
	echo "<br> Olá $nome";

}
function soma($num1, $num2){
	return($num1 + $num2);
}
//executando as funçõos
somaValor();
;
imprimirNome(soma(10 , 20));


 ?>