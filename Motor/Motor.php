<?php
namespace POO\Motor;
use POO\Motor\InterfaceMotor;

/**
 * Classe Genérica
 * @author Arilson
 */

abstract class Motor implements InterfaceMotor
{
const POTENCIA = 1.0;
private $tipoCombustivel = "Flex";
protected $aceleracao = 0;
private $ligado = false;

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

/**
 * liga o motor
 */
public function ligar() 
{ 
    $this->ligado = true;  
}

/**
 * desliga o motor
 */
public function desligar() 
{ 
    $this->ligado = false;
}

/**
 * informa se o motor está ligado ou desligdo
 * @return type
 */
public function estaLigado() 
{
    return $this->ligado;
}

}

