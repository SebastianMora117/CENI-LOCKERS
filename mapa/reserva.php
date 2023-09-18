<?php
session_start(); // Iniciar la sesión si aún no está iniciada

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('conexion.php');

    $lockerSelec = $_POST['locker'];

    // Verificar si ya se seleccionó un casillero
    if (isset($_SESSION['locker_seleccionado'])) {
        echo "<script>alert('Ya has seleccionado un casillero');
        window.location.href = '../mapa/index.php';</script>";
        exit();
    }

    if ($lockerSelec == "") {
        echo "<script>alert('Debes seleccionar un casillero');
        window.location.href = '../mapa/index.php';</script>";
        exit();
    }

    // Verificar si el casillero ya está ocupado
    $consulta_disponibilidad = "SELECT id_locker FROM lockers WHERE id_locker = '$lockerSelec'";
    $resultado = mysqli_query($conexion, $consulta_disponibilidad);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<script>alert('El casillero seleccionado no está disponible');
        window.location.href = '../mapa/index.php';</script>";
        exit();
    }

    $consulta = "INSERT INTO lockers (id_locker, reservation_time, expiration_time) VALUES ('$lockerSelec', NOW(), DATE_ADD(NOW(), INTERVAL 1 MINUTE))";

    if (mysqli_query($conexion, $consulta)) {
        // Registrar la selección en la variable de sesión
        $_SESSION['locker_seleccionado'] = true;

        echo "<script>alert('Reserva realizada');
        window.location.href = '../mapa/index.php';</script>";
        exit();
    } else {
        echo "<script>alert('Error al reservar: " . mysqli_error($conexion) . "');
        window.location.href = '../mapa/index.php';</script>";
        exit();
    }

    mysqli_close($conexion);
}
?>
