<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
include_once('conexion.php');

    $casillero = $_POST["casillero"];

    // Paso 3: Ejecuta una consulta SQL DELETE para eliminar la fila correspondiente
    $sql = "DELETE FROM lockers WHERE id_locker = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $casillero);

    if ($stmt->execute()) {
        echo "Reserva del casillero $casillero ha sido cancelada con éxito.";
    } else {
        echo "Error al cancelar la reserva del casillero: " . $stmt->error;
    }

    // Cierra la conexión
    $stmt->close();
    $conn->close();


    mysqli_close($conexion);
}

?>
