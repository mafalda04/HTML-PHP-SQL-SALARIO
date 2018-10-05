<?php

class estudiante{

    public function Registrar($conexion,$nombreEstudiante,$apellidoEstudiante,$edad,$idCiudad2,$idAcudiente2){
        echo $query = "CALL registrar_estudiante('$nombreEstudiante','$apellidoEstudiante',$edad,$idCiudad2,$idAcudiente2)";
        $consulta= mysqli_query($conexion,$query);

        if($consulta){
            $respuesta="Usuario Registrado";
        }else{
            $respuesta="Problemas al registrar";
        }

        return $respuesta;
    }

    public function consultar($conexion){
        $query="SELECT*FROM estudiante";
        $consulta=mysqli_query($conexion,$query);
        return $consulta;
    }
    public function consultarId($conexion,$id){
        $query="SELECT*FROM estudiante WHERE id = $id";
        $consulta=mysqli_query($conexion,$query);
        return $consulta;
    }
    public function editar($conexion,$nombreEStudiante,$apellidoEstudiante,$edad,$id){
        $query="UPDATE estudiante SET nombreEstudiante ='$nombreEstudiante',apellidoEstudiante='$apellidoEstudiante',
        edad=$edad, WHERE id =$id";
        $consulta=mysqli_query($conexion,$query);
        if($consulta){
            $respuesta="Actualizado con exito";
        }else{
            $respuesta="Problemas al actualizar";
        }
      return $respuesta;
    }

    public function eliminar($conexion,$id){
        $query="DELETE FROM estudiante WHERE id =$id";
        $consulta=mysqli_query($conexion,$query);
        if($consulta){
            $respuesta="Eliminado con exito";
        }else{
            $respuesta="Usuario no se elimino";
        }
      return $respuesta;
    }
}