<?php
require_once("bd.php");

$ConsultaEmpleadosSQL ="SELECT * FROM `empleados`";
$ConsultaEmpleados =  mysqli_query($con, $ConsultaEmpleadosSQL);


// foreach($ConsultaEmpleados as $row)
// {
//     echo($row['nombres']);

// }


















?>