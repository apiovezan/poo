<?php
/**
 * Classe Genérica
 * @author Arilson
 */

class Motor 
{
const POTENCIA = 1.0;
private $tipoCombustivel = "Flex";
private $aceleracao = 0;

/**
 * Acelera o motor
 * @param type $valor Valor de aceleração de 0 a 100
 * @return type
 * @return int 
 */
public function acelerar($valor =0) 
{
    $this->aceleracao = $valor;
    $potencia = $valor * self::POTENCIA;
    return $potencia;
}


}

