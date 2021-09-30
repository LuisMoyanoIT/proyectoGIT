<?php


//datos de la conexion
$db_host="localhost"; //www.ejemplo.cl
$db_user="root";
$db_pass="";
$db_name="ayudantia";


//string conexion
$con = mysqli_connect($db_host, $db_user,$db_pass, $db_name);

if(mysqli_connect_errno())
{
   echo 'No se pudo conectar a la base de datos: ' .mysqli_connect_error(); 
}else
{
    echo 'Se conecto';
}



?>