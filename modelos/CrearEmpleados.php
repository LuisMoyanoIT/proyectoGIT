<?php

require_once("bd.php");

$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$lugarNacimiento = $_POST["lugarNacimiento"];
$fechaNacimiento = $_POST["fechaNacimiento"];
$telefono = $_POST["telefono"];
$cargo = $_POST["cargo"];
$estado = $_POST["estado"];




//echo($codigo);
$crearEmpleadoSQL = "INSERT INTO `empleados` (`codigo`, `nombres`, `lugar_nacimiento`, `fecha_nacimiento`, `telefono`, `puesto`, `estado`) VALUES (".$codigo.", '$nombre', '$lugarNacimiento', '$fechaNacimiento', ".$telefono.", '$cargo', '$estado')";
$crearEmpleado = mysqli_query($con, $crearEmpleadoSQL);


//navegacion
header("Location: http://localhost/Clase3/class2.php");











?>