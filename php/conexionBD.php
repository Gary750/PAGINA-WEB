<?php
$conexion = mysqli_connect("localhost", "root", "", "techstore pc's");

//!Comprobar conexion
if (!$conexion) {
    die("Conexion Fallida" . mysqli_connect_error());
}   


?>