<?php session_start();
    include "Conexion.php";    
    include "../../clases/pacientes.php";      
    
    //insercion de datos segura
    // $conexion->real_escape_string(htmlentities($_POST['nombre']))
    $datos=array(          
            $nombre = strtoupper($_POST['nombre']),
            $amaterno = strtoupper($_POST['apaterno']),
            $apaterno = strtoupper($_POST['amaterno']),
            $edad = strtoupper($_POST['edad']),
            $sexo = strtoupper($_POST['sexo']),
            $escolaridad = strtoupper($_POST['escolaridad']),
            $ocupacion = strtoupper($_POST['ocupacion']),
            $tipopac = strtoupper($_POST['tpaciente'])
        );

    $registrar = new metodos();
    if($registrar->insertarDatosNombre($datos)){
        header("location:../../pacientes.php");
    }else{
        echo "No se pudo registrar";
    }


?>