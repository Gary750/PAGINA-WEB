<?php
include 'conexionBD.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //?Crear variables ára insertar datos a la BD desde PHP
    //$id = 1;
    $marca = $_POST["brand"];
    $especificaciones = $_POST["specs"];
    $precio	 = $_POST["price"];

    //*sentencia SQL para insertar datos
    $sql = "INSERT INTO computadora (marca, especificaciones, precio)
        VALUES ('$marca','$especificaciones','$precio')";

    if ($conexion->query($sql) == TRUE) {
        echo " datos insertados correctamente";
    } else {
        echo "Datos no insertados", $conexion->error;
    }
}
//*Cerrar la conexion
$conexion->close();

?>

