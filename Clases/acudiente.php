<?php
class acudiente {

    public function consultar_acudiente($conexion){
        $query="call consultar_acudiente";
        $consulta=mysqli_query($conexion,$query);
        return $consulta;
    }

}