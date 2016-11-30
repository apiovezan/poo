<?php

namespace POO\Motor;

/**
 * Description of MotorTurbo
 *
 * @author aluno
 */
class MotorTurbo extends Motor implements \JsonSerializable
{
    private $turbo = false;
    
      public function ativaTurbo() 
    {
        $this->turbo =true;
                
    }
    
    public function jsonSerialize() 
    {
        
    }

    
}
