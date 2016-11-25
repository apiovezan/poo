<?php

require_once "Carro.php"; 



$veiculo1 = new Carro("Preto");
$veiculo2 = new Carro();

$veiculo2->abastecer(25);
var_dump($veiculo1, $veiculo2);

echo $veiculo2::MODELO."\n";
echo $veiculo2::MARCA."\n";





/*
if ($veiculo1 == $veiculo2)
{
	echo "sim\n";
}else{
	echo "não\n";
}
*/
