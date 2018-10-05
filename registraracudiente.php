<?php
include 'Clases/conexion.php';
include 'Clases/ciudad.php';


$ObjConexion = new conexion();
$ObjCiudad = new ciudad();


$conexion = $ObjConexion->conectar();
$ciudades = $ObjCiudad->consultar_ciudad($conexion);
$conexion = $ObjConexion->conectar();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Acudiente</title>
</head>
<body>
    <form action="Controlador/Registraracudiente.php" method="post">
    <label for="">Nombre: </label><input type="text" name="nombreEstudiante" id=""><br>
    <label for="">Apellido: </label><input type="text" name="apellidoEstudiante" id=""><br>
    <label for="">Edad: </label><input type="text" name="edad" id=""><br>
    <label for="">Telefono: </label><input type="text" name="telefono" id=""><br>
    <label for="">Direccion: </label><input type="text" name="direccion" id=""><br>
        
    <input type="submit" value="Registrar"><br>


    
</form>
</body>
</html>