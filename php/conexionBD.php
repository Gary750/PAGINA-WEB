<?php
$conexion = mysqli_connect("localhost", "root", "1234", "techstore pc's");

//!Comprobar conexion
if (!$conexion) {
    die("Conexion Fallida" . mysqli_connect_error());
}   


?>