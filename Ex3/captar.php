<?php
if (strlen($_POST['num1'])>0 && strlen($_POST['num2'])>0 ) {
	$n1=$_POST['num1'];
	$n2=$_POST['num2'];



function soma$n(1, $n2){
$soma=0;
$soma=$n1+$n2;
return $soma;
}

function div($n1, $n2){
$divisao=0;
$divisao=$n1 / $n2;
return $divisao;
}

function sub($n1, $n2){
$Subtracao=0;
$Subtracao=$n1 % $n2;
return $Subtracao;
}

function mult($n1, $n2){
$multiplicacao=0;
$multiplicacao=$n1 * $n2;
return $multiplicacao;
}




}
else{
	$Soma="erro";
	echo $Soma;
	
}
echo "A soma é ".soma($n1, $n2). "<br>";
echo "A divisão é ".div($n1, $n2). "<br>";
echo "A Subtração é ".Sub($n1, $n2). "<br>";
echo "A multiplicação é ".mult($n1, $n2). "<br>";
  ?>