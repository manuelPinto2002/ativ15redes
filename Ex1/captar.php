<?php
if (strlen($_POST['num1'])>0 && strlen($_POST['num2'])>0 && strlen($_POST['num3'])>0 && strlen($_POST['num4'])>0) {

$soma=$_POST['num1'] + $_POST['num2'] +$_POST['num3'] + $_POST['num4'];

}
else{
	$Soma="erro";
	echo $nome;
	
}
echo "A soma é ".$soma. "<br>";
  ?>