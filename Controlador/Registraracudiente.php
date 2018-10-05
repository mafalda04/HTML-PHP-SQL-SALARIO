<?php

include '../Clases/conexion.php';
include '../Clases/estudiante.php';
include '../Clases/acudiente.php';


$objConexion = new conexion();
$conexion = $objConexion->conectar();

$objEstudiante = new estudiante();
$objAcudiente=new acudiente();

print_r($_POST);
echo $objAcudiente->registraracudiente($conexion,$_POST['nombreAcudiente'],$_POST['apellidoAcudiente'],$_POST['edadAcudiente'],$_POST['telefono'],$_POST['direccion']);
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
   
   
</form>
</body>