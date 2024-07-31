<?php
    namespace App\Otras;

    class Saiyajin{

        use \App\Traits\TecnicasCombinadas;
        
        private string $nombre;  //public = modificador de acceso
        private int $nivel_pelea; //valores de clase
        public string $clase="Saiyajin";
        public static $cabello="Negro";
        const VELOCIDAD="Normal"; // el nombre de la const debe ir en mayuscula por standar

        public function __construct($nombre, $nivel_pelea){  // metodo constructor se llama cuando se instancia la clase 
            $this->nombre=$nombre;
            $this->nivel_pelea=$nivel_pelea; // valores fuera de la clase
        }

        public static function MostrarColorCabello(){
            return "Tengo el cabello de Color: ".self::$cabello;
        }
        //public function __construct(public string $nombre, public int $nivel_pelea ){
        //} otra manera de declarar el constructor mas corta declarando las variables de la clase en el constructor
        //}

        public function Saludar($texto="Hola desde la otra clase soy "){    //indico :string obligatoriamente digo que sea un string
            return $texto.$this->nombre;                   // si cambio metodo a private no funciona
        }

        public function NivelDePelea(){      // con this accedemos tanto a atributos como a metodos de la clase
            return $this->nombre." tiene un nivel de pelea ".$this->nivel_pelea." y pertenece a la clase ".$this->clase;
        }

        public function getNombre(){   // creamos un getters para poder utilizar esta funcion privada en distintos metodos
            return $this->nombre;
        }

        public function setNombre($nombre){   // creamos un setters para poder utilizar esta funcion privada en distintos metodos
            $this->nombre=$nombre;
        }

        public function getNivelPelea(){   // creamos un getters viene de obtener para poder utilizar esta funcion privada en distintos metodos
            return $this->nivel_pelea;
        }

        public function setNivelPelea($nivel_pelea){   // creamos un setters viene de la palabra definir para poder utilizar esta funcion privada en distintos metodos
            $this->nivel_pelea=$nivel_pelea;
        }
    }