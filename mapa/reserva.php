
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('conexion.php');

    $lockerSelec = $_POST['locker'];

    if ($lockerSelec == "") {
        echo "<script>alert('Debes seleccionar un casillero');
        window.location.href = '../mapa/index.php';</script>";
        exit();
    }

    $consulta = "INSERT INTO lockers (id_locker, reservation_time, expiration_time) VALUES ('$lockerSelec', NOW(), DATE_ADD(NOW(), INTERVAL 1 MINUTE))";

    if (mysqli_query($conexion, $consulta)) {
        echo "<script>alert('Reserva realizada');
        window.location.href = '../mapa/index.php';</script>";

        // Eliminar la reserva después de 1 minuto
       

        exit();
    } else {
        echo "<script>alert('Error al reservar: " . mysqli_error($conexion) . "');
        window.location.href = '../mapa/index.php';</script>";
        exit();
    }

    mysqli_close($conexion);
}
?>
