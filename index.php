<?php 

    ini_set("display_errors", E_ALL); // Mostrar todos los errores, warnings, notice
    header("Content-Type: text/html;charset=utf-8");
    
    //Incluir la configuracion
    require_once '_controller/config.php';
    
    //Controlador
    require_once '_controller/ctrl_consulta.php';
    
    
    $ctrl = new Consulta();        
    