<?php
include "Conexion.php";

class metodos extends Conexion
{
    public function mostrarDatos($sql)
    {
        $conexion = parent::conectar();
        $result = mysqli_query($conexion, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function insertarDatosNombre($datos)
    {
        $conexion = parent::conectar();
        $sql = "INSERT INTO t_pacientes (nombre, apaterno, amaterno, edad, sexo, escolaridad, ocupacion, tipopac)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
        $query = $conexion->prepare($sql);
        
        $query->bind_param('sssissss', $datos[0],
                                        $datos[1],
                                        $datos[2],
                                        $datos[3],
                                        $datos[4],
                                        $datos[5],
                                        $datos[6],
                                        $datos[7],);
        return $query->execute();
    }


    public function actualizaDatosNombre($datos)
    {
        $conexion = parent::conectar();        
        $sql = "UPDATE t_pacientes set nombre='$datos[0]',
                                        apellido='$datos[1]'
                                    where id='$datos[2]'";
        return $result = mysqli_query($conexion, $sql);
    }

    public function eliminarDatosNombre($id)
    {
        $conexion = parent::conectar();   
        $sql = "DELETE from t_pacientes where id='$id'";
        return $result = mysqli_query($conexion, $sql);
    }
}
