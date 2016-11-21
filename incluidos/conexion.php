<?php

// conector base de datos
$servidor="localhost";
$usuario="root";
$clave="";
$dbase="dbwebpa";
// conectarse a la bd
$conexionBD= new mysqli($servidor,$usuario,$clave, $dbase);
if ($conexionBD->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $conexionBD->connect_errno . ") " . $conexionBD->connect_error;
    
}
//error_reporting(0);
?>