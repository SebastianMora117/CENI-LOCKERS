<?php

include('../PHP/Funciones.php');

InicioSesion();
Inactividad(1800);
if (isset($_GET['cerrar_sesion'])) {
    cerrarSesion();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificamos si se envió un número de casillero válido
    if (isset($_POST['casillero']) && is_numeric($_POST['casillero'])) {
        $casillero = $_POST['casillero'];

        include_once('conexion.php');


        // Consulta para cancelar la reserva del casillero
        $sql = "DELETE FROM lockers WHERE id_locker = $casillero";

        if ($conexion->query($sql) === TRUE) {
            echo "Reserva cancelada correctamente";
        } else {
            echo "Error al cancelar la reserva: " . $conexion->error;
        }

        $conexion->close();
    } else {
        echo "El número de casillero no es válido";
    }
}

?>
