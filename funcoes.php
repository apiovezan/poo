<?php

function ola($nome) 
{
    echo "Olá $nome";
}

//ola('Arilson');

$idade = 20;

$ola = function($name) use (&$idade)
        {
        echo "Que legal $name";
       $idade = 35;
        };
        
        function  teste ($param)
        {
            $param('Arilson');
        }











//$ola("Arilson");
 //echo $idade;
 
  //var_dump($ola);
 