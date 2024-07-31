<?php
    namespace App\Traits;
    
    trait TecnicasSimples{

        public function AumentarVelocidad(){
            return $this->getNombre()." Aumento su velocidad ";
        }

        public function AumentarKi(){
            return $this->getNombre()." Aumento su Ki ".$this->getNivelPelea();
        }
    }