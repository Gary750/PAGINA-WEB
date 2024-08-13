<?php
include 'conexionBD.php';

// Variables para almacenar resultados
$marca = '';
$especificaciones = '';
$precio = '';

// Verificar si se ha solicitado la actualización
if (isset($_POST['actualizar'])) {
    // Obtener el ID desde el formulario
    $id = $_POST['update-id'];  
    $marca = $_POST['update-brand'];
    $especificaciones = $_POST['update-specs'];
    $precio = $_POST['update-price'];

    // Consulta para actualizar los datos
    $query = 'UPDATE computadora SET marca=?, especificaciones=?, precio=? WHERE id=?';

    if ($stmt = $conexion->prepare($query)) {
        // Enlazar parámetros correctamente
        $stmt->bind_param("ssdi", $marca, $especificaciones, $precio, $id); 
        
        // Ejecutar la declaración
        if ($stmt->execute()) {
            echo "Datos actualizados correctamente";
        } else {
            echo "Error al ejecutar la actualización: " . $stmt->error;
        }
        $stmt->close(); // Cerrar la declaración
    } else {
        echo "Error al preparar la consulta: " . $conexion->error;
    }
} 
?>