<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('Conexion.php');

    $casillero = $_POST['casillero'];

    $consulta = "SELECT expiration_time FROM lockers WHERE id_locker = $casillero";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();

        $expiration_time = $row['expiration_time'];
    
        date_default_timezone_set('America/Bogota');
        $hora_actual = time();
        $expiration_time = strtotime($expiration_time);

        $timestamp_actual = strtotime(date('H:i:s', $hora_actual));
        $timestamp_expiracion = strtotime(date('H:i:s', $expiration_time));

        if ($timestamp_expiracion < $timestamp_actual) {
            $timestamp_expiracion += 24 * 60 * 60; // Agregar un día en segundos
        }
        
        // Calcular el tiempo restante en segundos
        $tiempo_restante = $timestamp_expiracion - $timestamp_actual;

        $horas = floor($tiempo_restante / 3600);
        $minutos = floor(($tiempo_restante % 3600) / 60);
        $segundos = $tiempo_restante % 60;

      echo "<script>alert('Tiempo restante para la reserva del casillero: $horas horas, $minutos minutos y $segundos segundos');
        window.location.href = '../cancelacion/cancelacionn.php';</script>";
    } else {
      echo "<script>alert('casillero no encontrado');
        window.location.href = '../cancelacion/cancelacionn.php';</script>";
    }

    $conexion->close();
}
?>
