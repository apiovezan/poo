<?php

namespace POO\Veiculos;

use POO\Motor\Motor;
use MWM\Motor as MotorMWM;
use POO\Motor\InterfaceMotor;

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
	public function __construct(InterfaceMotor $motor, $cor = "Branco")
	{
		$this->tanqueCombustivel = 10;
		$this->cor = $cor;	
                $this->motor = $motor;
	}
        
        /**
         * Liga/desliga o motor
         */
	public function ligarDesliga()
	{
            if ($this->motor->estaLigado()) 
            {
                $this->motor->desligar();
                
            }else{
            $this->motor->ligar();
            }
	}	
	
       
        /**
         * Faz o carro andar
         * @param type $torque
         */
	public function andar($torque)
	{
             echo "Andou ".$torque."metros \n\n";
	}
        /**
         * Envia aceleração ao motor
         * @param int $valor Valor da aceleração informada
         */
        public function acelerar($valor)
        {
            try {
                $torque = $this->motor->acelerar($valor);
                $this->andar($torque);
                
            } catch (\Exception $e) {
               echo $e->getMessage();
            }
            
        }    

        /**
         * Abasteçe o veículo
         * @param int $valor Valor a ser colocado no tanque
         */
	public function abastecer($valor)
	{
		$this->tanqueCombustivel += $valor;
	}
        
        public function __call($name, $arguments) {
            echo "Voce não adquiriu o opcional".$name;
        }
        
        public function __get($name) 
                {
            echo "Voce tentou ler o atributo: $name \n\n";
            
        }
        
        public function __set($name, $value) 
        {
            echo "Voce tentou escrever no atributo: $name o valor $value \n\n";
        }
}


