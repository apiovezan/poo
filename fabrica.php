<pre>
<?php

require_once "Carro.php"; 
require_once './Motor.php';

$motor = new Motor();

$veiculo1 = new Carro($motor, "Preto");
$veiculo2 = clone $veiculo1;

$veiculo1->cor = "Vermelho";
$veiculo1->abastecer(25);

$veiculo1->acelerar(40);

var_dump($veiculo1);

echo "Potencia do motor:".Motor::POTENCIA;

echo "Motor :".Carro::MODELO;




/*echo $veiculo2::MODELO."\n";
echo $veiculo2::MARCA."\n";
*?




/*
if ($veiculo1 == $veiculo2)
{
	echo "sim\n";
}else{
	echo "não\n";
}
*/
