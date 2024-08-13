<?php
//!llamar el archivo de la conexion
include 'conexionBD.php';

//*indicarmos el metodo para enviar/eliminar datos
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //! OBTNER LOS DATOS DEL FORM
    $id = $_POST['id'];
    //!Preparar la consulta delete
    $elminar = "DELETE FROM computadora where id = ?";
    //!ejecutar la consulta
    if ($stm=$conexion->prepare($elminar)) {
        //*enlaza los parametros a la declaracion preparada
        $stm-> bind_param("i", $id);
        //!Ejecutar la consulta
        if($stm-> execute()){
            echo "Registro Eliminado";
        }else{
            echo "Error al eliminar el registro: ". $conexion->error;
        }
        //!cerramos la conexion
        $stm->close();
    }else{
        echo "Error al preparar la consulta: ",$conexion->error;
    }
}
?>