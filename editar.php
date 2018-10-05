<?php

include 'Clases/conexion.php';
include 'Clases/ciudad.php';

$objConexion=new conexion();
$objEstudiante=new estudiante();
$objCiudad = new ciudad();

$conexion=$objConexion->conectar();
$datos=$objEstudiante->consultarId($conexion,$_GET['id']);
$datos=$objCiudad->consultaridCiudad($conexion,$_GET['idCiudad']);

$nombreEstudiante;
$apellidoEstudiante;
$edad;
$idCiudad2;
$idAcudiente2;


while($dato=mysqli_fetch_array($datos)){
    $id=$dato['id'];
    $nombreEstudiante=$dato['nombreEstudiante'];
    $apellidoEstudiante=$dato['apellidoEstudiante'];
    $edad=$dato['edad'];
    $idCiudad2 = $dato['idCiudad2'];
    $idAcudiente2 = $dato['idAcudiente2'];


}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="Controlador/editar.php" method="post">
    <input value="<?php echo $id; ?>" type="hidden" name="id">
    <label for="">Nombre:<label><input type="text" name="nombreEstudiante" value="<?php echo $nombreEstudiante; ?>"><br>
    <label for="">Apellido:<label><input type="text" name="apellidoEstudiante"  value="<?php echo $apellidoEstudiante; ?>"><br>
    <label for="">Edad:<label><input type="text" name="edad"  value="<?php echo $edad; ?>"><br>
    <input type="submit" value="Actualizar">
</body>

<form action="Controlador/editar.php" method="post">
    <input value="<?php echo $id; ?>" type="hidden" name="id">
    <label for="">id:<label><input type="text" name="idCiudad" value="<?php echo $idCiudad; ?>"><br>
    <label for="">Nombre:<label><input type="text" name="nombre"  value="<?php echo $nombre; ?>"><br>

    <input type="submit" value="Actualizar">

</html>