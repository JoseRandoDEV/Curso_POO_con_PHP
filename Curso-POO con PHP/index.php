<?php

    require_once "autoload.php";

    //require_once "App/Traits/TecnicasEspeciales.php";
    //require_once "App/Traits/TecnicasSimples.php"; // los traits se incluyen al principio simpre
    //require_once "App/Traits/TecnicasCombinadas.php";
    //require_once "App/Clases/Saiyajin.php";  // incluimos la clase en este archivo
    //require_once "App/Clases/SuperSaiyajin.php";
    //require_once "App/Otras/Saiyajin.php";
    
    use App\Clases\Saiyajin;
    use App\Clases\SuperSaiyajin;
    //use App\Otras\Saiyajin as OtroSaiyajin;  

    //echo Saiyajin::MostrarColorCabello() ;
    //echo Saiyajin::$cabello;  // operador de resolucion ::
    //echo Saiyajin::VELOCIDAD; // llamamos a la const velocidad 
    //echo "<br><br>";

    $goku = new Saiyajin(nivel_pelea:1000,nombre:"Goku");
    echo $goku->Saludar();

    echo "<br><br>";

    //$goten = new Saiyajin(nivel_pelea:1000,nombre:"Goten");
    //echo $goten->Saludar();

    //echo "<br><br>";

    $vegeta = new Saiyajin("Vegeta",950);
    echo $vegeta->MostrarColorCabello();

    //echo "<br><br>";

    //$gohan = new SuperSaiyajin(nivel_pelea:1700, nombre:"Gohan");
    //echo $gohan->UsarKameHameHa();
    
    //$goku = new Saiyajin(nivel_pelea:1000,nombre:"Goku");
    //echo $goku->NivelDePelea();

    //echo "<br><br>";

    //$vegeta = new Saiyajin("Vegeta",950);
    //echo $vegeta->NivelDePelea();

    //echo "<br><br>";

    //$gohan = new SuperSaiyajin(nivel_pelea:1700, nombre:"Gohan");
    //echo $gohan->Transformacion();
    //echo "<br>";
    //echo $gohan->getNivelPelea();
    //echo $gohan->setNivelPelea(2000);
    //echo "<br>";
    //echo $gohan->getNivelPelea();