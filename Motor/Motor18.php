<?php

namespace POO\Motor;
use POO\Motor\Motor;

/**
 * Description of Motor18
 *
 * @author Arilson
 */
class Motor18 extends Motor implements \JsonSerializable
{
    const POTENCIA = 1.8;
    
    private $nitro = false;
    
    public function ativaNitro() 
    {
        $this->nitro =true;
                
    }
    
       public function acelerar($valor = 0)
       {
           if ($this->estaLigado() == false) 
            {
               throw  new\Exception("Não foi possível acelerar porque o motor não está ligado");
           }
           
           
             $this->aceleracao = $valor;
             $torque = $valor * self::POTENCIA;
           
           if($this->nitro == true)
           {
             return $torque * 1.5;  
           }else
            {
               return $torque;
            }
       }
       public function jsonSerialize() {
           return array (
               "potencia" => self::POTENCIA,
               "NITRO" => $this->nitro
           );
           
           
       }
}
