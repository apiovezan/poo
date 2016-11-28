<?php

class Carro
{
	
	const MODELO = "A3"; 	
	const MARCA = "AUDI";

	public $cor;
        /**
         * @var Motor 
         */
	private $motor;
	private $porta = 4;
	private $marcaVeiculo = "AUDI";
	private $tanqueCombustivel = 0; 	

        /**
         * 
         * @param Motor $motor
         * @param string $cor
         */
	public function __construct(Motor $motor, $cor = "Branco")
	{
		$this->tanqueCombustivel = 10;
		$this->cor = $cor;	
                $this->motor = $motor;
	}
        
        /**
         * Liga o motor
         */
	public function ligar()
	{

	}	
	
        /*
         * Desliga o motor
         */
	public function desligar()
	{

	}
       
        /**
         * Faz o carro andar
         * @param type $torque
         */
	public function andar($torque)
	{
             echo "Andou ".$torque."metros";
	}
        /**
         * Envia aceleração ao motor
         * @param int $valor Valor da aceleração informada
         */
        public function acelerar($valor)
        {
            $torque = $this->motor->acelerar($valor);
            $this->andar($torque);
        }    

        /**
         * Abasteçe o veículo
         * @param int $valor Valor a ser colocado no tanque
         */
	public function abastecer($valor)
	{
		$this->tanqueCombustivel += $valor;
	}
}


