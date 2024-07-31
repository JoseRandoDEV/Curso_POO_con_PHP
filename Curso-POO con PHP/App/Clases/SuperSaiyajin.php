<?php
    namespace App\Clases;
    
    class SuperSaiyajin extends Saiyajin{

        public string $clase="Super Saiyajin";
        public static $cabello="Amarillo";

        public function Transformacion(){

            if ($this->getNivelPelea() >= 1500){
                $texto=$this->getNombre()." se transformo en ".$this->clase; 
            }else{
                $texto=$this->getNombre()." No se transformo en ".$this->clase; 
            }
            return $texto;
        }

        //public function NivelDePelea(){      // con this accedemos tanto a atributos como a metodos de la clase
        //    $nivel=$this->nivel_pelea*2;
        //    return $this->nombre." aumento su nivel de pelea a ".$nivel;
        //}

        public static function MostrarColorCabello(){
            return "Tengo el cabello de Color: ".self::$cabello;
        }

        public static function NuevoMetodo(){
            return parent::VELOCIDAD;
        }
    }
