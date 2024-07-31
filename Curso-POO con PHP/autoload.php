<?php

spl_autoload_register(function($clase){
    $nombre_archivo= str_replace('\\','/',$clase).".php";   //le indicamos con str_replace que cambie las barras invertidas por la tradiciona
    echo "<br><br>";
    if(file_exists($nombre_archivo)){
        require_once $nombre_archivo;
    }

});
